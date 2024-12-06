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
        $offres = Offre::latest()->paginate(3);
        return view("offres.index", ['offres' => $offres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input());

        $request->validate([
            "offre_name" => ['required', 'min:3'],
            "offre_date" => ['required', 'min:3'],
            "offre_desc" => ['required', 'min:20'],
            "offre_role" => ['required', 'min:20'],

        ]);

        // Offre::create([
        //     'nom_offre' => $request->input('offre_name'),
        //     'date_limite' => $request->input('offre_date'),
        //     'description' => $request->input('offre_desc'),
        //     'role' => $request->input('offre_role'),
        // ]);

        $offre = new Offre;
        $offre->nom_offre = $request->input('offre_name');
        $offre->date_limite = $request->input('offre_date');
        $offre->description = $request->input('offre_desc');
        $offre->role = $request->input('offre_role');
        $offre->save();
        // dd($request->input());

        return redirect()->route('offre.index')->with('success', 'Offre ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        return view('offres.show', ['offre' => $offre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {

        // Offre::update();
        return view('offres.edit', ['offre' => $offre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offre $offre)
    {


        // $offre->update([
        //     'nom_offre' => $request->input('offre_name'),
        //     'date_limite' => $request->input('offre_date'),
        //     'description' => $request->input('offre_desc'),
        //     'role' => $request->input('offre_role'),
        // ]);


        $request->validate([
            "offre_name" => ['required', 'min:3'],
            "offre_date" => ['required', 'min:3'],
            "offre_desc" => ['required', 'min:20'],
            "offre_role" => ['required', 'min:20'],
        ]);

        // $offre->update($request->all());

        $offre->update([
            'nom_offre' => $request->input('offre_name'),
            'date_limite' => $request->input('offre_date'),
            'description' => $request->input('offre_desc'),
            'role' => $request->input('offre_role'),
        ]);

        $offre->save();


        return redirect()->route('offre.index')->with('success', 'Offre modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {

        $offre->delete();
        return redirect()->route('offre.index')->with('success', 'Offre supprimée avec succès');
    }
}
