<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/
// ', 'Home::index');

// bagian profile
    $routes->get('my-profile', 'Profile::Profile'); // tampilan profile
// selesai bagian profile

// bagian setting
    $routes->get('setting', 'Setting::Setting'); // tampilan setting
    $routes->get('setting/ganti-password', 'Setting::ganti_password'); // tampilan ganti password
// selesai bagian setting

// bagian auth
    $routes->get('login', 'Auth::login'); // tampilan login
    $routes->get('register', 'Auth::register'); // tampilan register
// selesai bagian auth

// Bagian Mentor

    //Dashboard
    $routes->get('dashboard-mentor', 'Mentor::dashboard_mentor');// tampilan dashboard mentor

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
    $routes->get('dashboard-intern', 'Intern::dashboard_intern');// tampilan dashboard intern

    //penugasan (daftar project)
    $routes->get('penugasan', 'Intern::penugasan'); // tampilan daftar project
    $routes->get('penugasan/view', 'Intern::view_penugasan'); // tampilan view project

    //sertifikat
    $routes->get('sertifikat-intern', 'Intern::sertifikat_intern'); // tampilan awal sertifikat

    // form pendaftaran
    $routes->get('pendaftaran', 'Intern::pendaftaran'); // tampilan pendaftaran
    $routes->get('pendaftaran/upload-file', 'Intern::upload_file'); // tampilan upload file pendaftaran
    $routes->get('pendaftaran/waiting', 'Intern::waiting_pendaftaran'); // tampilan edit pendaftaran

// End Bagian Intern

// Bagian Admin & HR
    // Dashboard 
    $routes->get('dashboard-admin', 'Admin::dashboard_admin');// tampilan dashboard admin

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