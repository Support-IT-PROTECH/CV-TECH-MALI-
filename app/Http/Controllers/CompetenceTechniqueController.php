<?php

namespace App\Http\Controllers;

use App\Models\CompetenceTechnique;
use Illuminate\Http\Request;

class CompetenceTechniqueController extends Controller
{
    public function index()
    {
        $competenceTechnique =  CompetenceTechnique::latest()->paginate(4);
        return view("technique.index", ["competenceTechniques" => $competenceTechnique]);
    }

    public function create(CompetenceTechnique $competenceTechnique)
    {
        return view("technique.create", ["competenceTechniques" => $competenceTechnique]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "competence_name" => ['required', 'min:3'],
        ]);


        $competenceTechnique = new CompetenceTechnique();
        $competenceTechnique->nom_de_la_competence = $request->input("competence_name");
        $competenceTechnique->save();

        return redirect('/techniques')->with('success', 'Offre Competence Personnelle created successfully.');
    }

    public function show(CompetenceTechnique $competenceTechnique)
    {
        return view('technique.show', ['competenceTechnique' => $competenceTechnique]);
    }

    public function edit(CompetenceTechnique $competenceTechnique)
    {
        return view("technique.edit", ['competenceTechnique' => $competenceTechnique]);
    }


    public function update(Request $request, CompetenceTechnique $competenceTechnique)
    {
        $request->validate([
            "competence_name" => ['required', 'min:3'],
        ]);

        $competenceTechnique->update([
            "nom_de_la_competence" => $request->input("competence_name"),
        ]);

        return redirect('/techniques')->with('success', 'Offre Competence Personnelle updated successfully.');
    }

    public function destroy(CompetenceTechnique $competenceTechnique)
    {
        $competenceTechnique->delete();
        return redirect('/techniques')->with('success', 'Offre Competence Personnelle deleted successfully.');
    }
}
