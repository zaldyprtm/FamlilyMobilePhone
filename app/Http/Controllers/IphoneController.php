<?php

namespace App\Http\Controllers;

use App\Models\IPhone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    //
    public function home()
    {
        $iphones = IPhone::all();
        return view('home', compact('iphone'));
    
    }
    public function index()
    {
        $iphones = IPhone::all();
        return view('iphone', compact('iphones'));
    }
}
