<?php

namespace App\Controllers;

class Recruitment extends BaseController
{

    public function home()
    {
        return view('recruitment/home', [
            'title' => 'Home',
        ]);
    }

    public function summary()
    {
        return view('recruitment/summary', [
            'title' => 'Summary',
        ]);
    }

    public function candidate()
    {
        return view('recruitment/candidate', [
            'title' => 'Candidate',
        ]);
    }

    public function interview()
    {
        return view('recruitment/interview', [
            'title' => 'Interview',
        ]);
    }
}
