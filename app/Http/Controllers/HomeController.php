<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('master');
    }

    public function about()
    {
        return view('about.about');
    }

    public function howItWorks()
    {
        return view('how-works.how-it-works');
    }
}
