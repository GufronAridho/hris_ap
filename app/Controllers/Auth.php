<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('Auth/index', [
            'title' => 'Login',
        ]);
    }

    public function login()
    {
        return redirect()->to(base_url('home'));
    }
}
