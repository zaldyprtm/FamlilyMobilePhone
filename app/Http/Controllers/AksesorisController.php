<?php

namespace App\Http\Controllers;

use App\Models\Aksesoris;
use Illuminate\Http\Request;

class AksesorisController extends Controller
{
    //
    public function home()
    {
        $aksesoris = Aksesoris::all();
        return view('home', compact('aksesoris'));
    }
    public function index()
    {
        $aksesoris = Aksesoris::all();
        return view('aksesoris', compact('aksesoris'));
    }
}
