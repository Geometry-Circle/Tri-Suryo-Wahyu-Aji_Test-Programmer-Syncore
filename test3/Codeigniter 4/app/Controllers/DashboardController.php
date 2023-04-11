<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function edit()
    {
        return view('dashboard/edit');
    }

    public function admin()
    {
        return view('dashboard/admin');
    }

}
