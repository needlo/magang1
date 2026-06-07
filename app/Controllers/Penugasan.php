<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Penugasan extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // ========================================================
    // HALAMAN 1: pm-teams.php (Daftar Proyek)
    // ========================================================
    public function index()
    {
        $intern_id = session()->get('id'); // ID intern yang sedang login

        // Ambil semua proyek beserta jumlah anggota yang sudah bergabung
        $projects = $this->db->table('projects')
            ->select('projects.*, users.name as mentor_name, 
                     (SELECT COUNT(*) FROM project_members WHERE project_id = projects.id AND status = "aktif") as current_member_count')
            ->join('users', 'users.id = projects.mentor_id', 'left')
            ->whereIn('projects.status', ['open', 'running'])
            ->get()->getResultArray();

        foreach ($projects as &$project) {

            $totalTask = $this->db->table('tasks')
                ->where('project_id', $project['id'])
                ->countAllResults();

            $completedTask = $this->db->table('tasks')
                ->where('project_id', $project['id'])
                ->where('status', 'closed')
                ->countAllResults();

            $project['progress'] = $totalTask > 0
                ? round(($completedTask / $totalTask) * 100)
                : 0;
        }

        // Ambil ID proyek di mana intern ini sudah bergabung
        $joined_projects = $this->db->table('project_members')
            ->where('intern_id', $intern_id)
            ->where('status', 'aktif')
            ->get()->getResultArray();

        $joined_ids = array_column($joined_projects, 'project_id');

        return view('Intern/Penugasan/pm-teams', [
            'projects' => $projects,
            'joined_ids' => $joined_ids
        ]);
    }

    // Fungsi untuk tombol "Gabung Proyek" di pm-teams
    public function join_project($project_id)
    {
        $intern_id = session()->get('id');

        // Cek kuota
        $project = $this->db->table('projects')->where('id', $project_id)->get()->getRowArray();
        $current_members = $this->db->table('project_members')->where('project_id', $project_id)->where('status', 'aktif')->countAllResults();

        if ($current_members < $project['max_member']) {
            $this->db->table('project_members')->insert([
                'project_id' => $project_id,
                'intern_id' => $intern_id,
                'status' => 'aktif'
            ]);
            return redirect()->to('/penugasan')->with('success', 'Berhasil bergabung dengan proyek!');
        }

        return redirect()->to('/penugasan')->with('error', 'Kuota proyek sudah penuh.');
    }

    // ========================================================
    // HALAMAN 2: to-do-list.php (Daftar Tugas dalam Proyek)
    // ========================================================
    public function todo($project_id)
    {
        $intern_id = session()->get('id');

        // Validasi apakah intern benar-benar anggota proyek ini
        $is_member = $this->db->table('project_members')
            ->where('project_id', $project_id)
            ->where('intern_id', $intern_id)
            ->where('status', 'aktif')
            ->countAllResults();

        if (!$is_member) {
            return redirect()->to('/penugasan')->with('error', 'Anda bukan anggota proyek ini.');
        }

        $project = $this->db->table('projects')->where('id', $project_id)->get()->getRowArray();

        // Ambil daftar tugas beserta status pengumpulan dari intern ini
        $tasks = $this->db->table('tasks')
            ->select('tasks.*, task_submissions.status as submission_status, task_submissions.file as submission_file')
            ->join('task_submissions', 'task_submissions.task_id = tasks.id AND task_submissions.submitted_by = ' . $intern_id, 'left')
            ->where('tasks.project_id', $project_id)
            ->get()->getResultArray();

        return view('Intern/Penugasan/to-do-list', [
            'project' => $project,
            'tasks' => $tasks
        ]);
    }

    // ========================================================
    // HALAMAN 3: detail-tugas.php (Detail & Pengumpulan)
    // ========================================================
    public function detail($task_id)
    {
        $intern_id = session()->get('id');

        $task = $this->db->table('tasks')
            ->select('tasks.*, users.name as mentor_name')
            ->join('users', 'users.id = tasks.created_by', 'left')
            ->where('tasks.id', $task_id)
            ->get()->getRowArray();

        $submission = $this->db->table('task_submissions')
            ->where('task_id', $task_id)
            ->where('submitted_by', $intern_id)
            ->get()->getRowArray();

        $comments = $this->db->table('task_comments')
            ->select('task_comments.*, users.name as sender_name')
            ->join('users', 'users.id = task_comments.user_id')
            ->where('task_id', $task_id)
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();

        // Hitung waktu tersisa
        $deadlineDate = new \DateTime($task['deadline'] . ' 23:59:59');
        $today = new \DateTime();
        $waktuTersisa = ($today > $deadlineDate) ? "Waktu Habis" : $today->diff($deadlineDate)->format('%a Hari %h Jam');

        return view('Intern/Penugasan/detail-tugas', [
            'task' => $task,
            'submission' => $submission,
            'comments' => $comments,
            'waktuTersisa' => $waktuTersisa
        ]);
    }

    // ========================================================
    // FUNGSI 1: KUMPULKAN TUGAS BARU
    // ========================================================
    public function submit_tugas()
    {
        // 1. Validasi File (Format & Size)
        $validation = $this->validate([
            'file_tugas' => [
                'rules' => 'uploaded[file_tugas]|ext_in[file_tugas,pdf,zip,rar,doc,docx]|max_size[file_tugas,10240]',
                'errors' => [
                    'uploaded' => 'File wajib diunggah.',
                    'ext_in' => 'Format file harus PDF, ZIP, RAR, atau DOC.',
                    'max_size' => 'Ukuran file maksimal 10MB.'
                ]
            ]
        ]);

        if (!$validation) {
            return redirect()->back()->with('error', $this->validator->getError('file_tugas'));
        }

        $intern_id = session()->get('id');
        $task_id = $this->request->getPost('task_id');
        $comment = $this->request->getPost('comment');
        $file = $this->request->getFile('file_tugas');

        if ($file->isValid() && !$file->hasMoved()) {
            $originalName = $file->getClientName();
            $newName = $file->getRandomName();

            // Cek/Buat folder jika belum ada (Penting untuk keamanan server)
            $uploadPath = ROOTPATH . 'public/uploads/submissions/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $file->move($uploadPath, $newName);

            $this->db->table('task_submissions')->insert([
                'task_id' => $task_id,
                'submitted_by' => $intern_id,
                'file' => $newName,
                'original_name' => $originalName,
                'comment' => $comment,
                'status' => 'pending'
            ]);

            $this->db->table('task_member_status')
                ->where('task_id', $task_id)
                ->where('intern_id', $intern_id)
                ->update(['status' => 'selesai']);

            return redirect()->back()->with('success', 'Tugas berhasil dikumpulkan!');
        }

        return redirect()->back()->with('error', 'Gagal mengupload file.');
    }

    // ========================================================
    // FUNGSI 2: EDIT TUGAS
    // ========================================================
    public function edit_tugas()
    {
        $intern_id = session()->get('id');
        $task_id = $this->request->getPost('task_id');
        $comment = $this->request->getPost('comment');

        // Ambil data submission lama
        $old_data = $this->db->table('task_submissions')
            ->where('task_id', $task_id)
            ->where('submitted_by', $intern_id)
            ->get()->getRowArray();

        // Keamanan: Jika data lama tidak ditemukan, stop
        if (!$old_data) {
            return redirect()->back()->with('error', 'Data pengumpulan tidak ditemukan.');
        }

        $newName = $old_data['file'];
        $originalName = $old_data['original_name'];

        // Cek apakah user mengupload file baru
        $file = $this->request->getFile('file_tugas');
        if ($file && $file->isValid()) {
            // Validasi file baru
            if (!$this->validate(['file_tugas' => 'ext_in[file_tugas,pdf,zip,rar,doc,docx]|max_size[file_tugas,10240]'])) {
                return redirect()->back()->with('error', 'Format file baru tidak valid.');
            }

            // Hapus file lama fisik jika ada
            if (!empty($old_data['file']) && file_exists(ROOTPATH . 'public/uploads/submissions/' . $old_data['file'])) {
                unlink(ROOTPATH . 'public/uploads/submissions/' . $old_data['file']);
            }

            // Upload file baru
            $originalName = $file->getClientName();
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/submissions/', $newName);
        }

        // Update ke database
        $this->db->table('task_submissions')
            ->where('id', $old_data['id'])
            ->update([
                'file' => $newName,
                'original_name' => $originalName,
                'comment' => $comment,
                'status' => 'pending'
            ]);

        return redirect()->back()->with('success', 'Tugas berhasil diperbarui!');
    }

    // ========================================================
    // FUNGSI 3: HAPUS TUGAS
    // ========================================================
    public function hapus_tugas()
    {
        $intern_id = session()->get('id');
        $task_id = $this->request->getPost('task_id');

        $old_data = $this->db->table('task_submissions')
            ->where('task_id', $task_id)
            ->where('submitted_by', $intern_id)
            ->get()->getRowArray();

        if ($old_data) {
            // Hapus file fisik
            if (file_exists(ROOTPATH . 'public/uploads/submissions/' . $old_data['file'])) {
                unlink(ROOTPATH . 'public/uploads/submissions/' . $old_data['file']);
            }

            $this->db->table('task_submissions')->where('id', $old_data['id'])->delete();

            $this->db->table('task_member_status')
                ->where('task_id', $task_id)
                ->where('intern_id', $intern_id)
                ->update(['status' => 'belum']);

            return redirect()->back()->with('warning', 'Jawaban tugas telah dihapus.');
        }

        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    // ========================================================
    // FUNGSI 4: KIRIM KOMENTAR / DISKUSI
    // ========================================================
    public function chat()
    {
        $intern_id = session()->get('id');
        $task_id = $this->request->getPost('task_id');
        $comment = $this->request->getPost('comment');

        if (!empty(trim($comment))) {
            $this->db->table('task_comments')->insert([
                'task_id' => $task_id,
                'user_id' => $intern_id,
                'comment' => $comment
            ]);
            return redirect()->back(); // Refresh langsung agar chat muncul
        }

        return redirect()->back()->with('error', 'Pesan tidak boleh kosong.');
    }
}