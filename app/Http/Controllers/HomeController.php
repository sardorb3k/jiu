<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\Models\System;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $system = System::first();
        return view('home', compact('system'));
    }
}
