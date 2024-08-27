<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function home()
    {
        $phones = Phone::all();
        return view('home', compact('phones'));
    }

    public function index()
    {
        $phones = Phone::all();
        return view('phones', compact('phones'));
    }
}