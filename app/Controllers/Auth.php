<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    // =========================
    // HALAMAN LOGIN
    // =========================
    public function login()
    {
        return view('auth/sign-in');
    }
    public function processLogin()
    {
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari user
        $user = $model->where('email', $email)->first();

        // Verifikasi login
        if ($user && password_verify($password, $user['password'])) {

            // =========================
            // BLOKIR JIKA BELUM AKTIF
            // =========================
            if ($user['is_active'] == 0) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Akun kamu belum aktif. Silakan cek email untuk memverifikasi pendaftaran.');
            }

            // =========================
            // SET SESSION DULU
            // =========================
            session()->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            // =========================
            // KHUSUS INTERN
            // =========================
            if ($user['role'] == 'intern') {

                $db = \Config\Database::connect();

                $pendaftaran = $db->table('internship_applications')
                    ->where('user_id', $user['id'])
                    ->get()
                    ->getRowArray();

                // --- JALUR PINTAS DEBUG ---
                if ($user['email'] == 'intern@test.com') {
                    return redirect()->to('/dashboard-intern');
                }
                //---- END JALUR PINTAS DEBUG ---

                // BELUM PERNAH ISI BIODATA SAMA SEKALI
                if (!$pendaftaran) {
                    return redirect()->to('/pendaftaran');
                }

                // SUDAH APPROVED
                if ($pendaftaran['status'] == 'approved') {
                    return redirect()->to('/dashboard-intern');
                }

                // CEK APAKAH SUDAH FINAL SUBMIT ATAU MASIH DRAFT
                if ($pendaftaran['final_submitted'] == 0) {
                    // Masih draft (baru autosave), kembalikan ke form
                    return redirect()->to('/pendaftaran');
                } else {
                    // final_submitted == 1 (Sudah klik kirim), lemparkan ke waiting
                    return redirect()->to('/pendaftaran/waiting');
                }
            }

            // =========================
            // ROLE MENTOR
            // =========================
            elseif ($user['role'] == 'mentor') {
                return redirect()->to('/dashboard-mentor');
            }

            // =========================
            // ROLE ADMIN
            // =========================
            elseif ($user['role'] == 'admin') {
                return redirect()->to('/dashboard-admin');
            }

        }

        // LOGIN GAGAL
        return redirect()->back()
            ->withInput()
            ->with('error', 'Email atau kata sandi salah');
    }

    // =========================
    // HALAMAN REGISTER
    // =========================
    public function register()
    {
        return view('auth/sign-up');
    }

    // =========================
    // PROSES REGISTER
    // =========================
    public function processRegister()
    {
        $model = new UserModel();

        $name = trim($this->request->getPost('name'));
        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // VALIDASI
        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
            session()->setFlashdata('error', 'Semua field wajib diisi.');
            return redirect()->to('/register');
        }

        // VALIDASI EMAIL
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            session()->setFlashdata('error', 'Format email tidak valid.');
            return redirect()->to('/register');
        }

        // VALIDASI PASSWORD
        if (strlen($password) < 6) {
            session()->setFlashdata('error', 'Password minimal 6 karakter.');
            return redirect()->to('/register');
        }

        // VALIDASI KONFIRMASI PASSWORD
        if ($password !== $confirmPassword) {
            session()->setFlashdata('error', 'Konfirmasi password tidak cocok.');
            return redirect()->to('/register');
        }

        // CEK EMAIL
        $checkEmail = $model->where('email', $email)->first();

        if ($checkEmail) {
            session()->setFlashdata('error', 'Email sudah digunakan.');
            return redirect()->to('/register');
        }

        // GENERATE KODE VERIFIKASI (OTP 6 Digit)
        $token = rand(100000, 999999);

        // INSERT USER DENGAN STATUS BELUM AKTIF
        $insert = $model->insert([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => 'intern',
            'is_active' => 0,
            'verification_token' => $token // Simpan 6 digit kode ini
        ]);

        // GAGAL INSERT (tetap sama)
        if (!$insert) {
            session()->setFlashdata('error', 'Gagal membuat akun.');
            return redirect()->to('/register');
        }

        // PROSES KIRIM EMAIL VERIFIKASI
        $emailService = \Config\Services::email();

        // WAJIB DITAMBAHKAN: Ganti dengan email SMTP Gmail kamu dan nama pengirim
        $emailService->setFrom('rafifdary54@gmail.com', 'Sistem Magang CV OTW');

        $emailService->setTo($email);
        $emailService->setSubject('Kode Verifikasi Akun Magang');

        $pesan = "Halo " . $name . ",<br><br>";
        $pesan .= "Terima kasih telah mendaftar. Kode verifikasi pendaftaran kamu adalah:<br><br>";
        $pesan .= "<h2 style='color: #4F46E5; letter-spacing: 5px;'>" . $token . "</h2><br>";
        $pesan .= "Masukkan kode di atas pada halaman verifikasi untuk mengaktifkan akun kamu.";

        $emailService->setMessage($pesan);

        if ($emailService->send()) {
            session()->set('temp_email', $email);
            return redirect()->to('/verify-otp')->with('success', 'Akun berhasil dibuat. Silakan cek email kamu untuk melihat kode verifikasi.');
        } else {
            // TAMPILKAN ERROR ASLI DARI SMTP
            echo $emailService->printDebugger(['headers']);
            exit;
        }
    }

    // =========================
    // HALAMAN FORM INPUT KODE OTP
    // =========================
    public function verifyOtp()
    {
        return view('auth/verify-otp');
    }

    // =========================
    // PROSES PENGECEKAN KODE OTP
    // =========================
    public function processVerifyOtp()
    {
        $model = new UserModel();

        // Ambil kode yang diinput oleh intern di form
        $inputToken = trim($this->request->getPost('otp_code'));

        // Cari user yang memiliki kode tersebut dan akunnya belum aktif
        $user = $model->where('verification_token', $inputToken)
            ->where('is_active', 0)
            ->first();

        if ($user) {
            $model->update($user['id'], [
                'is_active' => 1,
                'verification_token' => null
            ]);

            // Hapus session email sementara
            session()->remove('temp_email');

            // Redirect KEMBALI ke verify-otp membawa penanda 'verified' agar UI sukses muncul
            return redirect()->to('/verify-otp')->with('verified', true);
        } else {
            // Jika kode salah
            return redirect()->back()->with('error', 'Kode verifikasi salah atau akun sudah aktif.');
        }
    }

    // =========================
    // PROSES KIRIM ULANG OTP (AJAX)
    // =========================
    public function processResendOtp()
    {
        $tempEmail = session()->get('temp_email');
        if (!$tempEmail) {
            return $this->response->setJSON(['status' => false, 'message' => 'Sesi habis, silakan daftar atau login kembali.']);
        }

        $model = new UserModel();
        $user = $model->where('email', $tempEmail)->first();

        if (!$user || $user['is_active'] == 1) {
            return $this->response->setJSON(['status' => false, 'message' => 'Akun tidak valid atau sudah aktif.']);
        }

        // Generate OTP Baru
        $newToken = rand(100000, 999999);
        $db = \Config\Database::connect();
        $db->table('users')
            ->where('id', $user['id'])
            ->update(['verification_token' => $newToken]);

        // Kirim Email
        $emailService = \Config\Services::email();
        $emailService->setFrom('rafifdary54@gmail.com', 'Sistem Magang CV OTW');
        $emailService->setTo($tempEmail);
        $emailService->setSubject('Kode Verifikasi Akun Magang (Baru)');

        $pesan = "Halo " . $user['name'] . ",<br><br>";
        $pesan .= "Berikut adalah kode verifikasi terbaru kamu:<br><br>";
        $pesan .= "<h2 style='color: #4F46E5; letter-spacing: 5px;'>" . $newToken . "</h2><br>";

        $emailService->setMessage($pesan);

        if ($emailService->send()) {
            return $this->response->setJSON(['status' => true, 'message' => 'Kode OTP baru berhasil dikirim ke email kamu.']);
        } else {
            return $this->response->setJSON(['status' => false, 'message' => 'Gagal mengirim email.']);
        }
    }

    // =========================
    // HALAMAN FORGOT PASSWORD
    // =========================
    public function forgotPassword()
    {
        return view('auth/forgot-password');
    }

    // =========================
    // PROSES KIRIM EMAIL RESET
    // =========================
    public function processForgotPassword()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $user = $model->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan di sistem kami.');
        }

        // Buat kolom reset_token jika belum ada di tabel users (opsional bisa pakai kolom verification_token juga)
        $token = bin2hex(random_bytes(32));

        // Simpan token ke database (Pastikan kolom reset_token sudah kamu buat di database)
        // Jika tidak mau buat kolom baru, kamu bisa gunakan ulang kolom verification_token
        $model->update($user['id'], [
            'verification_token' => $token
        ]);

        $emailService = \Config\Services::email();
        $emailService->setFrom('rafifdary54@gmail.com', 'Sistem Magang CV OTW');
        $emailService->setTo($email);
        $emailService->setSubject('Reset Password Akun Magang');

        $resetLink = base_url('reset-password/' . $token);

        $pesan = "Halo " . $user['name'] . ",<br><br>";
        $pesan .= "Klik link di bawah ini untuk mereset kata sandi kamu:<br>";
        $pesan .= "<a href='" . $resetLink . "'>" . $resetLink . "</a><br><br>";
        $pesan .= "Jika kamu tidak memintanya, abaikan saja email ini.";

        $emailService->setMessage($pesan);

        if ($emailService->send()) {
            return redirect()->back()->with('success', 'Link reset password telah dikirim ke email kamu.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim email reset password.');
        }
    }

    // =========================
    // HALAMAN RESET PASSWORD
    // =========================
    public function resetPassword($token = null)
    {
        $model = new UserModel();
        $user = $model->where('verification_token', $token)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Token reset password tidak valid.');
        }

        return view('auth/reset-password', ['token' => $token]);
    }

    // =========================
    // PROSES UPDATE PASSWORD BARU
    // =========================
    public function processResetPassword()
    {
        $model = new UserModel();
        $token = $this->request->getPost('token');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if (strlen($password) < 6) {
            return redirect()->back()->with('error', 'Password minimal 6 karakter.');
        }

        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Konfirmasi password tidak cocok.');
        }

        $user = $model->where('verification_token', $token)->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Permintaan tidak valid.');
        }

        // Update password dan kosongkan token
        $model->update($user['id'], [
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'verification_token' => null
        ]);

        return redirect()->to('/login')->with('success', 'Password berhasil diubah. Silakan login dengan kata sandi baru.');
    }

    // =========================
    // LOGOUT
    // =========================
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}