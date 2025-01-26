<?php

namespace App\Controllers;

class PageController extends BaseController
{
    public function home()
    {
        return view('home', ['title' => 'Home']);
    }

    public function blog()
    {
        return view('blog', ['title' => 'Blog']);
    }
    public function login()
    {
        return view('login', ['title' => 'Login']);
    }
    public function dashboard()
    {
        return view('dashboard', ['title' => 'Dashboard']);
    }
}
