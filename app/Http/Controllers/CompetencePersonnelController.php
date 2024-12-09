<?php

namespace App\Http\Controllers;

use App\Models\CompetencePersonnelle;
use Illuminate\Http\Request;
// CompetencePersonnelle

class CompetencePersonnelController extends Controller
{
    public function index()
    {
        $competencePersonnelle =  CompetencePersonnelle::latest()->paginate(4);
        return view("personel.index", ["competencePersonnelles" => $competencePersonnelle]);
    }

    public function create()
    {
        return view('personel.create',);
    }


    public function store(Request $request)
    {
        $request->validate([
            "competence_name" => ['required', 'min:3'],
        ]);


        $competencePersonnelle = new CompetencePersonnelle;
        $competencePersonnelle->nom_de_la_competence = $request->input("competence_name");
        $competencePersonnelle->save();

        return redirect('/personels')->with('success', 'Offre Competence Personnelle created successfully.');
    }

    public function show(CompetencePersonnelle $competencePersonnelle)
    {
        return view('personel.show', ['competencePersonnelle' => $competencePersonnelle]);
    }

    public function edit(CompetencePersonnelle $competencePersonnelle)
    {
        return view("personel.edit", ['competencePersonnelle' => $competencePersonnelle]);
    }

    public function update(Request $request, CompetencePersonnelle $competencePersonnelle)
    {
        $request->validate([
            "competence_name" => ['required', 'min:3'],
        ]);

        $competencePersonnelle->update([
            "nom_de_la_competence" => $request->input("competence_name"),
        ]);

        return redirect('/personels')->with('success', 'Offre Competence Personnelle updated successfully.');
    }

    public function destroy(CompetencePersonnelle $competencePersonnelle)
    {
        $competencePersonnelle->delete();
        return redirect('/personels')->with('success', 'Offre Competence Personnelle deleted successfully.');
    }
}
