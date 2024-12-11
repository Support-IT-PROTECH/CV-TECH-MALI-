<?php

namespace App\Http\Controllers;

use App\Models\CompetencePersonnelle;
use App\Models\CompetenceTechnique;
use App\Models\ExperienceDetail;
use App\Models\Offre;
use App\Models\OffreDetail;
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
    public function job_infos($id)
    {
        $offres = Offre::findOrFail($id);
        $experiences = ExperienceDetail::get();
        $competenceTechniques = CompetenceTechnique::get();
        $competencePersonnelle = CompetencePersonnelle::get();
        $details = OffreDetail::findOrFail($id);

        // dd($offres);

        return view('job_infos', ["offres" => $offres, "competenceTechniques" => $competenceTechniques, "experiences" => $experiences, "details" => $details, "competencePersonnelle" => $competencePersonnelle]);
    }
    public function company_infos()
    {
        return view('company_infos');
    }

    public function jobs_list()
    {
        return view('offres_list');
    }

    public function top_profile()
    {
        return view('top_profile');
    }
}