<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/
// ', 'Home::index');

// Bagian Mentor

// Dashboard
    $routes->get('dashboard', 'Mentor::dashboard');

    // Project
    $routes->get('project-list', 'Mentor::project_list');
    $routes->get('project-list/create', 'Mentor::create_project');
    $routes->get('project-list/edit', 'Mentor::edit_project');
    $routes->get('project-list/task', 'Mentor::task_project');

    // Detail Project
    $routes->get('project-list/view', 'Mentor::view_project');
    $routes->get('project-list/view/edit-task', 'Mentor::edit_task_project');
    $routes->get('project-list/view/add-task', 'Mentor::add_task_project');

    // Penilaian
    $routes->get('penilaian', 'Mentor::penilaian');
    $routes->get('penilaian/kelompok', 'Mentor::kelompok_penilaian'); //
    $routes->get('penilaian/edit', 'Mentor::edit_penilaian'); // tampilan edit penilaian

    // Sertifikat
    $routes->get('sertifikat', 'Mentor::sertifikat'); // tampilan awal generate sertifikat
    $routes->get('sertifikat/generate', 'Mentor::generate_sertifikat'); //tampilan generate sertifikat
    $routes->get('sertifikat/edit', 'Mentor::edit_sertifikat'); // tampilan edit generate sertifikat
    $routes->get('sertifikat/upload-template', 'Mentor::upload_template_sertifikat'); // tampilan upload template sertifikat
    $routes->get('sertifikat/edit-template', 'Mentor::edit_template_sertifikat'); // tampilan edit template sertifikat

// End Bagian Mentor