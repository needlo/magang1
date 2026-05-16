<?php

namespace App\Controllers;

class Profile extends BaseController
{
    //profile
    public function Profile()
    {
        return view('Profile/my-profile'); // tampilan profile
    }
}