<?php

namespace App\Controllers;

class Intern extends BaseController
{
    // =====================================================
    // DASHBOARD INTERN
    // =====================================================

    public function dashboard_intern()
    {
        return view('Intern/Dashboard/lms-index');
    }


    // =====================================================
    // PENUGASAN
    // =====================================================

    public function penugasan()
    {
        return view('Intern/Penugasan/pm-teams');
    }

    public function view_penugasan()
    {
        return view('Intern/Penugasan/to-do-list');
    }


    // =====================================================
    // SERTIFIKAT
    // =====================================================

    public function sertifikat_intern()
    {
        return view('Intern/Sertifikat/sertifikat');
    }


    // =====================================================
    // FORM PENDAFTARAN - STEP 1
    // =====================================================

    public function pendaftaran()
    {
        $db = \Config\Database::connect();

        $userId = session()->get('id');

        $pendaftaran = $db->table('internship_applications')
            ->select('internship_applications.*, users.name, users.email')
            ->join('users', 'users.id = internship_applications.user_id', 'left')
            ->where('internship_applications.user_id', $userId)
            ->get()
            ->getRowArray();

        return view('Intern/From_Daftar/form-biodata', [
            'pendaftaran' => $pendaftaran
        ]);
    }


    // =====================================================
    // PROSES SIMPAN BIODATA
    // =====================================================

    public function processBiodata()
    {
        // cek login
        if (!session()->get('logged_in')) {

            return redirect()->to('/login');

        }

        $db = \Config\Database::connect();

        $userId = (int) session()->get('id');

        // cek data lama
        $check = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        $data = [

            'user_id' => $userId,
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'domisili' => $this->request->getPost('domisili'),
            'no_hp' => $this->request->getPost('no_hp'),
            'institusi' => $this->request->getPost('institusi'),
            'jurusan' => $this->request->getPost('jurusan'),
            'minat_posisi' => $this->request->getPost('minat_posisi'),
            'linkedin' => $this->request->getPost('linkedin'),
            'github' => $this->request->getPost('github'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'tanggal_selesai' => $this->request->getPost('tanggal_selesai'),
            'status' => 'pending'

        ];

        // insert atau update
        if (!$check) {

            $db->table('internship_applications')->insert($data);

        } else {

            $db->table('internship_applications')
                ->where('user_id', $userId)
                ->update($data);

        }

        return redirect()->to('/pendaftaran/upload-file');
    }

    // =====================================================
    // AUTOSAVE BIODATA
    // =====================================================

    public function autosaveBiodata()
    {
        if (!session()->get('logged_in')) {

            return $this->response->setJSON([
                'status' => false
            ]);

        }

        $db = \Config\Database::connect();

        $userId = (int) session()->get('id');

        $field = $this->request->getPost('field');
        $value = $this->request->getPost('value');

        // field yang diizinkan untuk autosave
        $allowedFields = [
            'name',
            'email',
            'jenis_kelamin',
            'domisili',
            'no_hp',
            'institusi',
            'jurusan',
            'minat_posisi',
            'linkedin',
            'github',
            'tanggal_mulai',
            'tanggal_selesai'
        ];

        // keamanan
        if (!in_array($field, $allowedFields)) {

            return $this->response->setJSON([
                'status' => false
            ]);

        }

        // khusus update tabel users
        if ($field == 'name' || $field == 'email') {

            $db->table('users')
                ->where('id', $userId)
                ->update([
                    $field => $value
                ]);

            // update session juga
            session()->set($field, $value);

            return $this->response->setJSON([
                'status' => true
            ]);
        }

        // cek data user
        $check = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        // kalau belum ada row
        if (!$check) {

            $db->table('internship_applications')->insert([
                'user_id' => $userId,
                $field => $value,
                'status' => 'pending'
            ]);

        } else {

            // update field tertentu saja
            $db->table('internship_applications')
                ->where('user_id', $userId)
                ->update([
                    $field => $value
                ]);

        }

        return $this->response->setJSON([
            'status' => true
        ]);
    }

    // =====================================================
    // FORM DOKUMEN - STEP 2
    // =====================================================
    public function upload_file()
    {
        $db = \Config\Database::connect();

        $userId = session()->get('id');

        $pendaftaran = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        $db = \Config\Database::connect();

        $userId = session()->get('id');

        $pendaftaran = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        return view('Intern/From_Daftar/form-dokumen', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    // =====================================================
    // PROSES UPLOAD DOKUMEN
    // =====================================================
    public function processDokumen()
    {
        $db = \Config\Database::connect();

        $userId = session()->get('id');

        // ambil data lama
        $oldData = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        // ambil file
        $cv = $this->request->getFile('cv_file');
        $proposal = $this->request->getFile('proposal_file');
        $surat = $this->request->getFile('surat_pengantar_file');

        $updateData = [];

        // CV
        if ($cv && $cv->isValid() && !$cv->hasMoved()) {

            // validasi pdf
            if ($cv->getExtension() != 'pdf') {

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'CV harus berupa PDF'
                ]);
            }

            // validasi max 10MB
            if ($cv->getSize() > 10485760) {

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Ukuran CV maksimal 10MB'
                ]);
            }

            // hapus file lama
            if (!empty($oldData['cv_file']) && file_exists('uploads/cv/' . $oldData['cv_file'])) {

                unlink('uploads/cv/' . $oldData['cv_file']);
            }

            // nama random server
            $cvName = $cv->getRandomName();

            // nama asli user
            $cvOriginal = $cv->getClientName();

            // upload
            $cv->move('uploads/cv', $cvName);

            $updateData['cv_file'] = $cvName;
            $updateData['cv_original_name'] = $cvOriginal;
        }

        // PROPOSAL
        if ($proposal && $proposal->isValid() && !$proposal->hasMoved()) {

            if ($proposal->getExtension() != 'pdf') {

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Proposal harus berupa PDF'
                ]);
            }

            if ($proposal->getSize() > 10485760) {

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Ukuran Proposal maksimal 10MB'
                ]);
            }

            if (!empty($oldData['proposal_file']) && file_exists('uploads/proposal/' . $oldData['proposal_file'])) {

                unlink('uploads/proposal/' . $oldData['proposal_file']);
            }

            $proposalName = $proposal->getRandomName();

            $proposalOriginal = $proposal->getClientName();

            $proposal->move('uploads/proposal', $proposalName);

            $updateData['proposal_file'] = $proposalName;
            $updateData['proposal_original_name'] = $proposalOriginal;
        }

        // SURAT PENGANTAR
        if ($surat && $surat->isValid() && !$surat->hasMoved()) {

            if ($surat->getExtension() != 'pdf') {

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Surat pengantar harus berupa PDF'
                ]);
            }

            if ($surat->getSize() > 10485760) {

                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Ukuran surat pengantar maksimal 10MB'
                ]);
            }

            if (!empty($oldData['surat_pengantar_file']) && file_exists('uploads/surat_pengantar/' . $oldData['surat_pengantar_file'])) {

                unlink('uploads/surat_pengantar/' . $oldData['surat_pengantar_file']);
            }

            $suratName = $surat->getRandomName();

            $suratOriginal = $surat->getClientName();

            $surat->move('uploads/surat_pengantar', $suratName);

            $updateData['surat_pengantar_file'] = $suratName;
            $updateData['surat_original_name'] = $suratOriginal;
        }

        // UPDATE DATABASE
        if (!empty($updateData)) {

            $db->table('internship_applications')
                ->where('user_id', $userId)
                ->update($updateData);
        }

        return $this->response->setJSON([
            'status' => 'success'
        ]);
    }

    // =====================================================
    // AUTOSAVE FILE REALTIME
    // =====================================================
    public function autosaveFile()
    {
        $db = \Config\Database::connect();

        // pastikan AJAX
        if (!$this->request->isAJAX()) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'Invalid request'
            ]);
        }

        $userId = session()->get('id');

        // ambil field
        $field = $this->request->getPost('field');

        // ambil file
        $file = $this->request->getFile('file');

        // validasi file ada
        if (!$file || !$file->isValid()) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'File tidak valid'
            ]);
        }

        // validasi PDF
        if ($file->getExtension() != 'pdf') {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'File harus PDF'
            ]);
        }

        // validasi max 10MB
        if ($file->getSize() > 10 * 1024 * 1024) {

            return $this->response->setJSON([
                'status' => false,
                'message' => 'Ukuran maksimal 10MB'
            ]);
        }

        // nama random server
        $randomName = $file->getRandomName();

        // nama asli user
        $originalName = $file->getClientName();

        // tentukan folder upload
        $folder = '';

        // tentukan nama kolom original
        $originalField = '';

        switch ($field) {

            case 'cv_file':

                $folder = 'uploads/cv/';
                $originalField = 'cv_original_name';

                break;

            case 'proposal_file':

                $folder = 'uploads/proposal/';
                $originalField = 'proposal_original_name';

                break;

            case 'surat_pengantar_file':

                $folder = 'uploads/surat_pengantar/';
                $originalField = 'surat_original_name';

                break;

            default:

                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'Field tidak dikenali'
                ]);
        }

        // hapus file lama
        $oldData = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        if (!empty($oldData[$field])) {

            if (file_exists($folder . $oldData[$field])) {

                unlink($folder . $oldData[$field]);
            }
        }

        // upload file
        $file->move($folder, $randomName);

        // update database
        $update = [
            $field => $randomName,
            $originalField => $originalName
        ];

        $db->table('internship_applications')
            ->where('user_id', $userId)
            ->update($update);

        // response sukses
        return $this->response->setJSON([
            'status' => true,
            'original_name' => $originalName,
            'field' => $field,
            'file_url' => base_url($folder . $randomName)
        ]);

    }

    // =====================================================
    // HAPUS FILE
    // =====================================================
    public function deleteFile()
    {
        $db = \Config\Database::connect();

        $userId = session()->get('id');

        $field = $this->request->getPost('field');

        // ambil data lama
        $data = $db->table('internship_applications')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        $folder = '';
        $originalField = '';

        switch ($field) {

            case 'cv_file':

                $folder = 'uploads/cv/';
                $originalField = 'cv_original_name';

                break;

            case 'proposal_file':

                $folder = 'uploads/proposal/';
                $originalField = 'proposal_original_name';

                break;

            case 'surat_pengantar_file':

                $folder = 'uploads/surat_pengantar/';
                $originalField = 'surat_original_name';

                break;

            default:

                return $this->response->setJSON([
                    'status' => false
                ]);
        }

        // hapus file fisik
        if (!empty($data[$field])) {

            if (file_exists($folder . $data[$field])) {

                unlink($folder . $data[$field]);
            }
        }

        // reset database
        $db->table('internship_applications')
            ->where('user_id', $userId)
            ->update([
                $field => null,
                $originalField => null
            ]);

        return $this->response->setJSON([
            'status' => true
        ]);
    }

    public function finalSubmit()
    {
        $userId = session()->get('id');
        $db = \Config\Database::connect();

        $db->table('internship_applications')
            ->where('user_id', $userId)
            ->update([
                'final_submitted' => 1
            ]);

        return $this->response->setJSON(['status' => true]);
    }

    // =====================================================
    // HALAMAN WAITING / KONFIRMASI
    // =====================================================

    public function waiting_pendaftaran()
    {
        // cek login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();
        $userId = (int) session()->get('id');

        $pendaftaran = $db->table('internship_applications')
            ->select('internship_applications.*, users.name, users.email')
            ->join('users', 'users.id = internship_applications.user_id')
            ->where('user_id', $userId)
            ->get()
            ->getRowArray();

        // TOLAK AKSES JIKA BELUM FINAL SUBMIT
        if (!$pendaftaran || $pendaftaran['final_submitted'] == 0) {
            return redirect()->to('/pendaftaran')->with('error', 'Silakan selesaikan pendaftaran terlebih dahulu.');
        }

        return view('Intern/From_Daftar/form-konfirmasi', [
            'pendaftaran' => $pendaftaran
        ]);
    }
}