<?php

namespace App\Controllers;

class Profile extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $userId = session()->get('id');

        if (!$userId) {
            return redirect()->to('/login');
        }

        // Ambil data utama pengguna (berlaku untuk Admin, Mentor, Intern)
        $user = $this->db->table('users')->where('id', $userId)->get()->getRowArray();

        // PENGAMAN TAMBAHAN: Jika data user memang tidak ketemu di database
        if (!$user) {
            return redirect()->to('/login');
        }

        // Ambil data tambahan dari form biodata/profil sesuai role
        $profileData = null;
        if ($user['role'] == 'intern') {
            $profileData = $this->db->table('internship_applications')
                ->where('user_id', $userId)
                ->get()
                ->getRowArray();
        } else {
            $profileData = $this->db->table('staff_profiles')
                ->where('user_id', $userId)
                ->get()
                ->getRowArray();
        }

        // Kirim data ke view my-profile.php
        return view('Profile/my-profile', [
            'user' => $user,
            'intern' => $profileData
        ]);
    }
}