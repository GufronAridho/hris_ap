<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function trial()
    {
        return view('trial', [
            'title' => 'Dashboard',
            'username' => 'Gufron Aridho'
        ]);
    }
}
