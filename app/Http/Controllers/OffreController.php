<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offre = Offre::latest()->paginate(4);
        // dd($offre);
        return view("offres.index", ["offres" => $offre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("offres.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            "offre_name" => ['required', 'min:3'],
            "date_limite" => ['required', 'min:3'],
            "offre_description" => ['required', 'min:20'],
            "offre_role" => ['required', 'min:20'],
            "file-upload" => ["required"],
            "competence_technique" => ["required"],
            "competence_personnelle" => ["required"],
            "responsabilite_offre" => ["required"],
            "experience_offre" => ["required"],
            "horaire_offre" => ['required', 'numeric'],
            "salaire_offre" => ['required', 'numeric'],
            // "competence_technique" => implode(',', $request->input('competence_technique')),
            // "competence_personnelle" => implode(',', $request->input('competence_personnelle')),
            "adresse_offre" => ['required', 'min:3'],
            // "responsabilite_offre" => implode(',', $request->input('responsabilite_offre')),
            "situation_offre" => ['required'],
            // "experience_offre" => implode(',', $request->input('experience_offre')),
            // "horaire_offre" => ['required', 'numeric'],
            // "salaire_offre" => ['required', 'numeric'],
        ]);

        // $competence_technique = $validatedData['competence_technique'];
        // $competence_personnelle = implode(',', $validatedData['competence_personnelle']);
        // $responsabilite_offre = implode(',', $validatedData['responsabilite_offre']);
        // $experience_offre = implode(',', $validatedData['experience_offre']);

        //         if ($request->hasFile('image')) {
        //             $file = $request->file('image');
        //             $filename = time() . '.' . $file->getClientOriginalExtension();
        //             $file->move('images', $filename);
        //             $student->image = $filename;
        //         };


        $offre = new Offre();

        if ($request->hasFile("file-upload")) {
            $file = $request->file("file-upload");
            $filename = time() . "." .  $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $filename);
            $offre->logo_offre = $filename;
        }

        $offre->nom_offre = $validatedData['offre_name'];
        $offre->date_limite = $validatedData['date_limite'];
        $offre->description = $validatedData['offre_description'];
        $offre->role = $validatedData['offre_role'];
        $offre->adresse_offre = $validatedData['adresse_offre'];
        $offre->situation_offre = $validatedData['situation_offre'];
        $offre->competence_technique = $validatedData['competence_technique'];
        $offre->competence_personnelle = $validatedData['competence_personnelle'];
        $offre->responsabilite_offre = $validatedData['responsabilite_offre'];
        $offre->experience_professionnelles = $validatedData['experience_offre'];
        $offre->horaire_offre = $validatedData['horaire_offre'];
        $offre->salaire_offre = $validatedData['salaire_offre'];
        $offre->save();

        return redirect('/offres')->with('success', 'Offre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        return view("offres.show", ['offre' => $offre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        return view("offres.edit", ['offre' => $offre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        //
    }
}