<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function top() {
        return view('top');
    }

    function about() {
        return view('about');
    }
}
