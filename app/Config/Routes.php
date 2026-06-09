<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/
// ', 'Home::index');

// Bagian Profile
$routes->get('my-profile', 'Profile::index');

// Bagian Setting
$routes->get('setting', 'Setting::index');
$routes->get('setting/ganti-password', 'Setting::ganti_password');
$routes->post('setting/update_profile', 'Setting::update_profile'); // Jangan lupa tambahkan rute POST ini

// Bagian Change Password
$routes->get('change-password', 'Setting::ganti_password');
$routes->post('change-password', 'Setting::proses_ganti_password');

// bagian auth
$routes->get('login', 'Auth::login'); // tampilan login
$routes->post('login/process', 'Auth::processLogin'); // proses login

$routes->get('register', 'Auth::register'); // tampilan register
$routes->post('register/process', 'Auth::processRegister'); // proses register

$routes->get('logout', 'Auth::logout'); // logout

// ================================
// VERIFIKASI EMAIL (SISTEM INPUT KODE / OTP)
// ================================
$routes->get('verify-otp', 'Auth::verifyOtp'); // Tampilan form input kode
$routes->post('verify-otp/process', 'Auth::processVerifyOtp'); // Proses validasi kode dari form
$routes->post('verify-otp/resend', 'Auth::processResendOtp'); // Proses request resend OTP

// ================================
// FORGOT PASSWORD & RESET PASSWORD
// ================================
$routes->get('forgot-password', 'Auth::forgotPassword'); // form input email
$routes->post('forgot-password/process', 'Auth::processForgotPassword'); // proses kirim email reset

$routes->get('reset-password/(:any)', 'Auth::resetPassword/$1'); // form input password baru
$routes->post('reset-password/process', 'Auth::processResetPassword'); // proses update password
// selesai bagian auth

// Bagian Mentor

//Dashboard
$routes->get(
    'dashboard-mentor',
    'Mentor::dashboard_mentor',
    ['filter' => ['auth', 'role:mentor']]
);

// Project
$routes->get('project-list', 'Mentor::project_list');// tampilan list project
$routes->get('project-list/create', 'Mentor::create_project');// tampilan create project
$routes->get('project-list/edit', 'Mentor::edit_project');// tampilan edit project

// Detail Project
$routes->get('project-list/task', 'Mentor::task_project');// tampilan view tugas project
$routes->get('project-list/view', 'Mentor::view_project');// tampilan view project
$routes->get('project-list/view/edit-task', 'Mentor::edit_task_project');// tampilan edit task project
$routes->get('project-list/view/add-task', 'Mentor::add_task_project');// tampilan add task project

// Penilaian
$routes->get('penilaian', 'Mentor::penilaian');// tampilan penilaian
$routes->get('penilaian/kelompok', 'Mentor::kelompok_penilaian'); // tampilan kelompok penilaian
$routes->get('penilaian/edit', 'Mentor::edit_penilaian'); // tampilan edit penilaian

// Sertifikat
$routes->get('sertifikat', 'Mentor::sertifikat'); // tampilan awal generate sertifikat
$routes->get('sertifikat/generate', 'Mentor::generate_sertifikat'); //tampilan generate sertifikat

// End Bagian Mentor

// Bagian Intern

// Dashboard intern
$routes->get(
    'dashboard-intern',
    'Intern::dashboard_intern',
    ['filter' => ['auth', 'role:intern']]
);

//sertifikat
$routes->get('sertifikat-intern', 'Intern::sertifikat_intern'); // tampilan awal sertifikat

// ================================
// FORM PENDAFTARAN INTERN
// ================================

// STEP 1 - FORM BIODATA
$routes->get('pendaftaran', 'Intern::pendaftaran');

// PROSES SIMPAN BIODATA
$routes->post('pendaftaran/process-biodata', 'Intern::processBiodata');
$routes->post('pendaftaran/autosave', 'Intern::autosaveBiodata');

// STEP 2 - FORM DOKUMEN
$routes->get('pendaftaran/upload-file', 'Intern::upload_file');
$routes->post('pendaftaran/autosave-file', 'Intern::autosaveFile');

// 2.1 PROSES UPLOAD DOKUMEN
$routes->post('pendaftaran/process-dokumen', 'Intern::processDokumen');

// 2.2 PROSES HAPUS DOKUMEN
$routes->post('pendaftaran/delete-file', 'Intern::deleteFile');
$routes->post('pendaftaran/final-submit', 'Intern::finalSubmit');

// STEP 3 - HALAMAN WAITING / KONFIRMASI
$routes->get('pendaftaran/waiting', 'Intern::waiting_pendaftaran');

// DASHBOARD INTERN
$routes->get('dashboard-intern', 'Intern::dashboard_intern');

// =====================================================
// MODUL PENUGASAN INTERN (Menggunakan Controller Penugasan)
// =====================================================

// 1. Tampilan daftar proyek (pm-teams.php)
$routes->get('penugasan', 'Penugasan::index');

// 2. Aksi tombol gabung proyek
$routes->get('penugasan/join_project/(:num)', 'Penugasan::join_project/$1');

// 3. Tampilan daftar tugas di dalam 1 proyek (to-do-list.php)
$routes->get('penugasan/todo/(:num)', 'Penugasan::todo/$1');

// 4. Tampilan halaman detail & kumpul tugas (detail-tugas.php)
$routes->get('penugasan/detail/(:num)', 'Penugasan::detail/$1');

// 5. Proses Form Penugasan
$routes->post('penugasan/submit_tugas', 'Penugasan::submit_tugas');
$routes->post('penugasan/edit_tugas', 'Penugasan::edit_tugas');
$routes->post('penugasan/hapus_tugas', 'Penugasan::hapus_tugas');
$routes->post('penugasan/chat', 'Penugasan::chat');

// End Bagian Intern

// Bagian Admin & HR

// Dashboard 

$routes->get(
    'dashboard-admin',
    'Admin::dashboard_admin',
    ['filter' => ['auth', 'role:admin']]
);

// anggota office
$routes->get('anggota-office', 'Admin::anggota_office'); // tampilan anggota office
$routes->get('anggota-office/create', 'Admin::create_anggota_office'); // tampilan create anggota office
$routes->get('anggota-office/edit', 'Admin::edit_anggota_office'); // tampilan edit anggota office
$routes->get('anggota-office/view', 'Admin::detail_anggota_office'); // tampilan detail anggota office

// anggota magang
$routes->get('anggota-magang', 'Admin::anggota_magang'); // tampilan anggota magang
$routes->get('anggota-magang/view', 'Admin::view_anggota_magang'); // tampilan view anggota magang
$routes->get('anggota-magang/edit', 'Admin::edit_anggota_magang'); // tampilan edit anggota magang

// jadwal interview
$routes->get('jadwal-interview', 'Admin::jadwal_interview'); // tampilan jadwal interview

// Data Pendaftar
$routes->get('data-pendaftar', 'Admin::data_pendaftar'); // tampilan data pendaftar
$routes->get('data-pendaftar/view', 'Admin::view_data_pendaftar'); // tampilan view data pendaftaran
$routes->get('data-pendaftar/edit', 'Admin::edit_data_pendaftar'); // tampilan edit data pendaftaran
// End Bagian Admin & HR