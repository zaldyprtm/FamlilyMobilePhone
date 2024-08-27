<?php

namespace App\Http\Controllers;

use App\Models\Sim;
use Illuminate\Http\Request;

class SimController extends Controller
{
    //
    public function home()
    {
        $sims = Sim::all();
        return view('home', compact('sims'));
    }
    public function index()
    {
        $sims = Sim::all();
        return view('sims', compact('sims'));
    }
}
