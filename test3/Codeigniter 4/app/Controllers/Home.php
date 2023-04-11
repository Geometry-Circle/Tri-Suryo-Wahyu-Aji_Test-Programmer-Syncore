<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($email == 'admin@gmail.com' && $password == 'admin') {
            return view('/dashboard/admin');
        }
        return view('/dashboard/index');
    }

}
