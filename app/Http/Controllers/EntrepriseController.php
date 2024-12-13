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
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
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

        $valeurs = implode(',', $validated['valeurs']); // Ex: "Innovation,Intégrité,Responsabilité"
        $secteurs = implode(',', $validated['secteur_d_activite']); // Ex: "Technologie,Santé,Éducation"
        $image = null;
        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('images', 'public'); // Stocke dans storage/app/public/images
        }
        // Insère dans la base de données
        Entreprise_2::create([
            'image' => $imagepath,
            'nom' => $validated['nom'],
            'domaine' => $validated['domaine'],
            'description' => $validated['description'],
            'vision' => $validated['vision'],
            'nom_valeur' => $valeurs,
            'nom_secteur_activite' => $secteurs,
            'adresse' => $validated['adresse'],
            'telephone' => $validated['telephone'],
            'email' => $validated['email'],
            'site_web' => $validated['url'],
        ]);

        return redirect('/');
    }
}
