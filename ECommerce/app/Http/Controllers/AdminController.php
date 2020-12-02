<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function about()
    {
        return view('website.backend.layouts.about-us');
    }
}
