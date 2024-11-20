<?php

namespace App\Http\Controllers;

use App\Models\Travail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $travails = Travail::paginate(4);
        return view("home", ['travails' => $travails]);
    }
}