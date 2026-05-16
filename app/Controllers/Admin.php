<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        session()->set([
            'role' => 'admin'
        ]);
    }

    //dashboard
    public function dashboard_admin()
    {
        return view('Admin/Dashboard/dashboard');
    }

    //anggota office
    public function anggota_office()
    {
        return view('Admin/Office/user_list'); // tampilan anggota office
    }
    public function create_anggota_office()
    {
        return view('Admin/Office/add_user'); // tampilan create anggota office
    }
    public function edit_anggota_office()
    {
        return view('Admin/Office/edit_user'); // tampilan edit anggota office
    }
    public function detail_anggota_office()
    {
        return view('Admin/Office/detail_user'); // tampilan detail anggota office
    }

    //anggota magang
    public function anggota_magang()
    {
        return view('Admin/Magang/list_intern'); // tampilan anggota magang
    }
    public function view_anggota_magang()
    {
        return view('Admin/Magang/detail_intern'); // tampilan view anggota magang
    }
    public function edit_anggota_magang()
    {
        return view('Admin/Magang/edit_intern'); // tampilan edit anggota magang
    }

    //Jadwal interview
    public function jadwal_interview()
    {
        return view('Admin/Jadwal/jadwal'); // tampilan jadwal interview
    }

    //Data pendaftar
    public function data_pendaftar()
    {
        return view('Admin/Data_Pendaftar/data_pendaftar'); // tampilan data pendaftar
    }
    public function view_data_pendaftar()
    {
        return view('Admin/Data_Pendaftar/detail_data_pendaftar'); // tampilan detail data pendaftar
    }
    public function edit_data_pendaftar()
    {
        return view('Admin/Data_Pendaftar/edit_pendaftar'); // tampilan edit data pendaftar
    }
}