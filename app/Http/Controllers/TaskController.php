<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index() {
        return view('tasks.index');
    }
    function top() {
        return view('top');
    }
}
