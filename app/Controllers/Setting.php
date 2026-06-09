<?php

namespace App\Controllers;

class Setting extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    // Menampilkan halaman settings.php
    public function index()
    {
        $userId = session()->get('id');

        // Pengaman jika tidak ada session aktif
        if (!$userId) {
            return redirect()->to('/login');
        }

        $user = $this->db->table('users')->where('id', $userId)->get()->getRowArray();

        // Pengaman tambahan jika user tidak ditemukan di database
        if (!$user) {
            return redirect()->to('/login');
        }

        // Ambil data tambahan berdasarkan role
        $profileData = null;
        if ($user['role'] == 'intern') {
            // Khusus intern, ambil dari tabel internship_applications
            $profileData = $this->db->table('internship_applications')
                ->where('user_id', $userId)
                ->get()
                ->getRowArray();
        } else {
            // Khusus admin dan mentor, ambil dari tabel staff_profiles
            $profileData = $this->db->table('staff_profiles')
                ->where('user_id', $userId)
                ->get()
                ->getRowArray();
        }

        // Kirim data ke view settings.php
        // Tetap menggunakan key 'intern' agar sesuai dengan variabel di view kamu
        return view('Setting/settings', [
            'user' => $user,
            'intern' => $profileData
        ]);
    }

    // Memproses form submit dari halaman settings
    public function update_profile()
    {
        $userId = session()->get('id');
        $role = session()->get('role');

        // 1. Data akun utama yang pasti dimiliki semua role (disimpan ke tabel users)
        $dataUser = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        // Proses unggah foto profil (tetap sama)
        $fileFoto = $this->request->getFile('photo');
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $currentUser = $this->db->table('users')->where('id', $userId)->get()->getRowArray();
            if (!empty($currentUser['photo']) && file_exists(ROOTPATH . 'public/uploads/profiles/' . $currentUser['photo'])) {
                unlink(ROOTPATH . 'public/uploads/profiles/' . $currentUser['photo']);
            }
            $namaFoto = $fileFoto->getRandomName();
            $fileFoto->move(ROOTPATH . 'public/uploads/profiles/', $namaFoto);
            $dataUser['photo'] = $namaFoto;
        }

        // Jalankan update ke tabel users
        $this->db->table('users')->where('id', $userId)->update($dataUser);

        // 2. Percabangan Pengisian Biodata Berdasarkan Role
        if ($role == 'intern') {
            // Jika Intern, simpan data spesifik intern ke internship_applications
            $dataIntern = [
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
            ];

            $cekData = $this->db->table('internship_applications')->where('user_id', $userId)->get()->getRowArray();
            if ($cekData) {
                $this->db->table('internship_applications')->where('user_id', $userId)->update($dataIntern);
            } else {
                $dataIntern['user_id'] = $userId;
                $this->db->table('internship_applications')->insert($dataIntern);
            }

        } else {
            // Jika Admin atau Mentor, simpan data profilnya ke tabel staff_profiles
            $dataStaff = [
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'domisili' => $this->request->getPost('domisili'),
                'no_hp' => $this->request->getPost('no_hp'),
                'linkedin' => $this->request->getPost('linkedin'),
                'github' => $this->request->getPost('github'),
            ];

            $cekData = $this->db->table('staff_profiles')->where('user_id', $userId)->get()->getRowArray();
            if ($cekData) {
                $this->db->table('staff_profiles')->where('user_id', $userId)->update($dataStaff);
            } else {
                $dataStaff['user_id'] = $userId;
                $this->db->table('staff_profiles')->insert($dataStaff);
            }
        }

        return redirect()->back()->with('success', 'Perubahan profil berhasil disimpan!');
    }

    public function ganti_password()
    {
        $userId = session()->get('id');
        if (!$userId) {
            return redirect()->to('/login');
        }

        $user = $this->db->table('users')->where('id', $userId)->get()->getRowArray();

        // Memanggil file: app/Views/Setting/change-password.php
        return view('Setting/change-password', [
            'user' => $user
        ]);
    }

    // Memproses form ganti password
    public function proses_ganti_password()
    {
        $userId = session()->get('id');
        if (!$userId) {
            return redirect()->to('/login');
        }

        $oldPassword = $this->request->getPost('old_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        $user = $this->db->table('users')->where('id', $userId)->get()->getRowArray();

        // 1. Validasi Password Lama
        if (!password_verify($oldPassword, $user['password'])) {
            return redirect()->back()->with('error', 'Kata sandi lama tidak sesuai!');
        }

        // 2. BACKEND VALIDASI: Password baru tidak boleh sama dengan password lama
        if ($oldPassword === $newPassword) {
            return redirect()->back()->with('error', 'Kata sandi baru tidak boleh sama dengan kata sandi lama!');
        }

        // 3. BACKEND VALIDASI: Kecocokan Password Baru dan Konfirmasi
        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'Konfirmasi kata sandi tidak cocok!');
        }

        // Enkripsi dan Simpan
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $this->db->table('users')->where('id', $userId)->update([
            'password' => $hashedPassword
        ]);

        return redirect()->back()->with('success', 'Kata sandi Anda berhasil diperbarui!');
    }

}