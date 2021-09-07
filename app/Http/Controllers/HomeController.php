<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // return "retronando do HomeController";
        return view('home');
    }

    public function principal()
    {
        return view('home');
    }
}
