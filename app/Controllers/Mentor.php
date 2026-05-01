<?php

namespace App\Controllers;

class Mentor extends BaseController
{
    public function dashboard()
    {
        return view('mentor/dashboard/project-management-index');
    }
}