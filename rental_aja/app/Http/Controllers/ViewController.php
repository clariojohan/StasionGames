<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function viewAboutUs()
    {
        return view('about-us');
    }
}
