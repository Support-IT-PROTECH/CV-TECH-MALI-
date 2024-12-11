<?php

namespace App\Http\Controllers;

use App\Models\credential;
use App\Models\Entreprise;
use App\Models\Entreprise_Adresse;
use App\Models\Entreprise_valeur;
use App\Models\Experience_obejctif;
use App\Models\Experience_professionnel;
use App\Models\formation;
use App\Models\Profile;
use App\Models\secteur_activite;
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
        $entreprises = Entreprise::all();
        $valeurs = Entreprise_valeur::all();
        $activities = secteur_activite::all();
        $adresses = Entreprise_Adresse::all();
        return view('company_infos', compact('entreprises', 'valeurs', 'activities', 'adresses'));
    }

    public function jobs_list()
    {
        return view('offres_list');
    }

    public function top_profile()
    {
        $profiles = Profile::all();
        $credentials = credential::all();
        $formations = formation::all();
        $experiences = Experience_professionnel::all();
        $missions = Experience_obejctif::all();
        return view('top_profile', compact('profiles', 'credentials', 'formations', 'experiences', 'missions'));
    }
}
