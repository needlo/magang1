<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('Auth/sign-in');
    }

    public function register()
    {
        return view('Auth/sign-up');
    }
}