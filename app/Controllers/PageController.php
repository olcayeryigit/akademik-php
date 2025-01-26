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
}
