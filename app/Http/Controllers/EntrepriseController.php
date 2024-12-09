<?php

namespace App\Http\Controllers;

use App\Http\Requests\entreprise_infos_request;
use App\Models\Entreprise;
use App\Models\Entreprise_valeur;
use App\Models\secteur_activite;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function entreprise_infos()
    {
        return view('entreprise.entreprise-infos');
    }
    public function store_entreprise(Entreprise $entreprise, entreprise_infos_request $request)
    {
        //validation  des informations de l'entreprise 
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $entreprise->image = $filename;
        }
        $entreprise->nom = $request->nom;
        $entreprise->domaine = $request->domaine;
        $entreprise->description = $request->description;
        $entreprise->vision = $request->vision;


        $entreprise->save();
        return redirect('/entreprise-valeur');
    }

    public function entreprise_valeur()
    {

        return view('entreprise.entreprise_valeur');
    }
    public function store_valeur_entreprise(Request $request)
    {
        // validation des valeurs d'évaluation de l'entreprise 
        $valeurs = new Entreprise_valeur();
        $valeurs->valeurs = $request->nom;
        $valeurs->save();
        return redirect()->back();
    }
    public function entreprise_secteurs_activite()
    {
        return view('entreprise.secteur_activity');  // affiche la page des secteurs d'activité de l'entreprise
    }
    public function store_secteurs_activite(Request $request)
    {
        // validation des secteurs d'activité de l'entreprise 
        $secteurs = new secteur_activite();
        $secteurs->Nom_secteur = $request->secteur;
        $secteurs->save();
        return redirect()->back();
    }
}
