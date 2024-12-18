<?php

namespace App\Http\Controllers;

use App\Models\Entreprise_2;
use App\Models\Entreprise_Adresse;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index()
    {
        return view('entreprise.entreprise_create');
    }
    public function store(Entreprise_2 $entreprise_2, Request $request)
    {
        // Validation
        $request->validate([
            'image' => 'nullable|image|max:2048',
            'nom' => 'required|string|max:255',
            'domaine' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'vision' => 'nullable|string',
            'valeurs' => 'required|array', // Les valeurs doivent être un tableau
            'secteur_d_activite' => 'required|array', // Les secteurs doivent être un tableau
            'adresse' => 'required|',
            'telephone' => 'required',
            'email' => 'required|email',
            'url' => 'required|nullable',


        ]);

        // Sauvegarde de l'image

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $entreprise_2->image = $filename;
        }
        // Sauvegarde des données de l'entreprise
        $entreprise_2->nom = $request->nom;
        $entreprise_2->domaine = $request->domaine;
        $entreprise_2->description = $request->description;
        $entreprise_2->vision = $request->vision;
        $entreprise_2->nom_valeur = json_encode($request->valeurs);
        $entreprise_2->nom_secteur_activite = json_encode($request->secteur_d_activite);
        $entreprise_2->adresse = $request->adresse;
        $entreprise_2->telephone = $request->telephone;
        $entreprise_2->email = $request->email;
        $entreprise_2->site_web = $request->url;
        $entreprise_2->save();

        return redirect('/');
    }
}
