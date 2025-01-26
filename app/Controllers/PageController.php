<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }
}
