<?php

namespace App\Controllers;

class Mentor extends BaseController
{
    public function __construct()
    {
        session()->set([
            'role' => 'mentor'
        ]);
    }

    //dashboard
    public function dashboard()
    {
        return view('Mentor/Dashboard/project-management-index');
    }
    //selesai bagian Dashboard

    //project
    public function project_list()
    {
        return view('Mentor/Project_list/pm-teams'); // tampilan project / kelas
    }

    public function create_project()
    {
        return view('Mentor/Project_list/create-project'); // tampilan create project
    }

    public function edit_project()
    {
        return view('Mentor/Project_list/pm-edit-teams'); // tampilan edit project
    }

    //selesai bagian project
    
    //view project
    public function task_project()
    {
        return view('Mentor/Project_list/to-do-list'); // tampilan view tugas
    }

    public function view_project()
    {
        return view('Mentor/Project_list/pm-view-project-team'); // tampilan view project
    }

    public function edit_task_project()
    {
        return view('Mentor/Project_list/pm-teams-task-edit'); // tampilan edit tugas
    }

    public function add_task_project()
    {
        return view('Mentor/Project_list/pm-teams-task-add'); // tampilan tambah tugas
    }
    //selesai bagian view project

    //bagian penilaian
    public function penilaian()
    {
        return view('Mentor/Penilaian/pm-user-kelompok-penilaian'); // tampilan penilaian
    }

    public function kelompok_penilaian()
    {
        return view('Mentor/Penilaian/pm-users'); // tampilan kelompok penilaian
    }

    public function edit_penilaian()
    {
        return view('Mentor/Penilaian/pm-user-edit'); // tampilan edit penilaian
    }
    //selesai bagian penilaian

    //bagian sertifikat
    public function sertifikat()
    {
        return view('Mentor/Sertifikat/pm-sertifikat'); // tampilan awal generate sertifikat
    }
    public function generate_sertifikat()
    {
        return view('Mentor/Sertifikat/pm-sertifikat-edit'); //tampilan generate sertifikat
    }
    //selesai bagian sertifikat
}