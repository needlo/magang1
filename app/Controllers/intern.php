<?php

namespace App\Controllers;

class Intern extends BaseController
{
    public function __construct()
    {
        session()->set([
            'role' => 'intern'
        ]);
    }

    //dashboard
    public function dashboard_intern()
    {
        return view('Intern/Dashboard/lms-index');
    }

    //penugasan
    public function penugasan()
    {
        return view('Intern/Penugasan/pm-teams'); // tampilan daftar project
    }
    public function view_penugasan()
    {
        return view('Intern/Penugasan/to-do-list'); // tampilan view project
    }

    //sertifikat
    public function sertifikat_intern()
    {
        return view('Intern/Sertifikat/sertifikat'); // tampilan awal sertifikat
    }

    //Pendaftaran
    public function pendaftaran()
    {
        return view('Intern/From_Daftar/form-biodata'); // tampilan pendaftaran
    }
    public function upload_file()
    {
        return view('Intern/From_Daftar/form-dokumen'); // tampilan upload file pendaftaran
    }
    public function waiting_pendaftaran()
    {
        return view('Intern/From_Daftar/form-konfirmasi'); // tampilan edit pendaftaran
    }
}