<?php

namespace App\Http\Controllers;

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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function job_infos()
    {
        return view('job_infos');
    }
    public function company_infos()
    {
        return view('company_infos');
    }

    public function company_lists()
    {
        return view('company_lists');
    }

    public function jobs_list()
    {
        return view('offres_list');
    }

    public function top_profile()
    {
        return view('top_profile');
    }

    public function a_propos()
    {
        return view('a_propos');
    }
}
