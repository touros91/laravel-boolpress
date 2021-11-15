<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.site');
    }

    public function about()
    {
        return view('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts');
    }

    
}
