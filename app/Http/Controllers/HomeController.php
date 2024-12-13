<?php

namespace App\Http\Controllers;

use App\Models\credential;
use App\Models\Entreprise;
use App\Models\Entreprise_2;
use App\Models\Entreprise_Adresse;
use App\Models\Entreprise_valeur;
use App\Models\Experience_obejctif;
use App\Models\Experience_professionnel;
use App\Models\formation;
use App\Models\Profile;
use App\Models\secteur_activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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




        $entreprises = Entreprise_2::all();
        return view('company_infos', compact('entreprises'));
    }

    public function jobs_list()
    {
        return view('offres_list');
    }

    public function top_profile($id)
    {

        $profile = Profile::findOrFail($id);
        // dd($profile);
        $formations = formation::findOrFail($id);
        return view('top_profile', compact('profile', 'formations'));
    }

    public function show($id) {}
}
