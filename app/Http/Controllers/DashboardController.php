<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function welcome()
    {
        return view('landing');
    }

    public function index()
    {
        return view('index');
    }
}
