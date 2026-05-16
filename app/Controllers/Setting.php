<?php

namespace App\Controllers;

class Setting extends BaseController
{
    //setting
    public function Setting()
    {
        return view('Setting/settings'); // tampilan setting
    }

    //ganti password
    public function ganti_password()
    {
        return view('Setting/change-password'); // tampilan change password
    }
}