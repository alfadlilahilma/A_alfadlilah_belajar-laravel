<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('hello');
    }
    public function biodata()
    {
        return view('biodata');
    }
}
