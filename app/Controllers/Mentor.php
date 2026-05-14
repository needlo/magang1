<?php

namespace App\Controllers;

class Mentor extends BaseController
{
    //dashboard
    public function dashboard()
    {
        return view('Mentor/Dashboard/project-management-index');
    }
    //selesai bagian Dashboard

    //project
    public function project_list()
    {
        return view('Mentor/Menu/Project_list/pm-teams'); // tampilan project / kelas
    }

    public function create_project()
    {
        return view('Mentor/Menu/Project_list/create-project'); // tampilan create project
    }

    public function edit_project()
    {
        return view('Mentor/Menu/Project_list/pm-edit-teams'); // tampilan edit project
    }

    public function task_project()
    {
        return view('Mentor/Menu/Project_list/to-do-list'); // tampilan view tugas
    }
    //selesai bagian project

    //view project
    public function view_project()
    {
        return view('Mentor/Menu/Project_list/pm-view-project-team'); // tampilan view project
    }

    public function edit_task_project()
    {
        return view('Mentor/Menu/Project_list/pm-teams-task-edit'); // tampilan edit tugas
    }

    public function add_task_project()
    {
        return view('Mentor/Menu/Project_list/pm-teams-task-add'); // tampilan tambah tugas
    }
    //selesai bagian view project

    //bagian penilaian
    public function penilaian()
    {
        return view('Mentor/Menu/Penilaian/pm-users'); // tampilan penilaian
    }

    public function kelompok_penilaian()
    {
        return view('Mentor/Menu/Penilaian/pm-user-kelompok-penilaian'); // tampilan kelompok penilaian
    }

    public function edit_penilaian()
    {
        return view('Mentor/Menu/Penilaian/pm-user-edit'); // tampilan edit penilaian
    }
    //selesai bagian penilaian

    //bagian sertifikat
    public function sertifikat()
    {
        return view('Mentor/Menu/Sertifikat/pm-sertifikat'); // tampilan awal generate sertifikat
    }
    public function generate_sertifikat()
    {
        return view('Mentor/Menu/Sertifikat/pm-sertifikat-edit'); //tampilan generate sertifikat
    }
    public function edit_sertifikat()
    {
        return view('Mentor/Menu/Sertifikat/pm-sertifikat-edit'); // tampilan edit generate sertifikat
    }
    public function upload_template_sertifikat()
    {
        return view('Mentor/Menu/Sertifikat/pm-sertifikat-upload-template'); // tampilan upload template sertifikat
    }
    public function edit_template_sertifikat()
    {
        return view('Mentor/Menu/Sertifikat/pm-sertifikat-edit-template'); // tampilan edit template sertifikat
    }
    //selesai bagian sertifikat
}