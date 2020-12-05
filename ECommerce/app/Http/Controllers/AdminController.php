<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function about()
    {
        return view('website.backend.layouts.about-us');
    }

    public function return()
    {
        return view('website.backend.layouts.terms.return-policy');
    }

    public function privacy()
    {
        return view('website.backend.layouts.terms.privacy-policy');
    }

    public function terms()
    {
        return view('website.backend.layouts.terms.terms-conditions');
    }
}
