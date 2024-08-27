<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Android;

class AndroidController extends Controller
{
    //
    public function home()
    {
        $androids = Android::all();
        return view('home', compact('androids'));
    }

    public function index()
    {
        $androids = Android::all();
        return view('androids', compact('androids'));
    }
}
