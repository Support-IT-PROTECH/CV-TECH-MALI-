<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class formationController extends Controller
{
    public function index()
    {
        return view('profile.formation_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'lieu' => 'required',
            'date_formation' => 'required',
            'description' => 'required',
            'nom_competence' => 'required|array',
            // 'niveau_maitrise' => 'required|array',
            'nom_experience' => 'required',
            'duree_experience' => 'required',
            'lieu_experience' => 'required',
            'objective_professionnelle' => 'required|array',
        ]);

        $nom_competence = implode(',', $validated['nom_competence']);
        // $niveau_maitrise = implode(',', $validated['niveau_maitrise']);
        $objective_professionnelle = implode(',', $validated['objective_professionnelle']);

        Formation::create([
            'nom_formation' => $validated['nom'],
            'lieu_formation' => $validated['lieu'],
            'date_debut_fin_formation' => $validated['date_formation'],
            'description_formation' => $validated['description'],
            'nom_competence' => $nom_competence,
            // 'niveau_competence' => $niveau_maitrise,
            'nom_experience_professionnelle' => $validated['nom_experience'],
            'date_debut_fin_experience_professionnelle' => $validated['duree_experience'],
            'lieu_experience_professionnelle' => $validated['lieu_experience'],
            'objective_professionnelle' => $objective_professionnelle,
        ]);

        return redirect('/');
    }
}
