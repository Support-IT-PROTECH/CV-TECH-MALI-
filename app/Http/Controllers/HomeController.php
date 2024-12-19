<?php

namespace App\Http\Controllers;


use App\Models\Entreprise_2;

use App\Models\formation;
use App\Models\Profile;


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
    public function company_infos($id)
    {

        $entreprise = Entreprise_2::findOrFail($id);
        return view('company_infos', compact('entreprise'));
    }

    public function jobs_list()
    {
        return view('offres_list');
    }

    public function top_profile($id)
    {

        $profile = Profile::findOrFail($id);
        $formations = formation::findOrFail($id);
        return view('top_profile', compact('profile', 'formations'));
    }
}
