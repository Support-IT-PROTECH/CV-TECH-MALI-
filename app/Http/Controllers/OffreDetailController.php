<?php

namespace App\Http\Controllers;

use App\Models\OffreDetail;
use Illuminate\Http\Request;

class OffreDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offre_details = OffreDetail::latest()->paginate(4);
        return view('details.index', ['offre_details' => $offre_details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "offre_adresse" => ["required",],
            "offre_situation" => ["required",],
            "offre_horaire" => ["required", "numeric"],
            "offre_salaire" => ["required", "min:5", "numeric"],

        ]);

        // dd($request->input());
        // OffreDetail::create([
        //     'adresse_offre' => request('offre_adresse'),
        //     'situation_offre' => request('offre_situation'),
        //     'horaire_offre' => request('offre_horaire'),
        //     'salaire_offre' => request('offre_salaire'),
        // ]);

        $offre_details = new OffreDetail;
        $offre_details->adresse_offre = $request->input('offre_adresse');
        $offre_details->situation_offre = $request->input('offre_situation');
        $offre_details->horaire_offre = $request->input('offre_horaire');
        $offre_details->salaire_offre = $request->input('offre_salaire');
        $offre_details->save();

        return redirect()->route('detail.index')->with('success', 'Detail enregistré avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OffreDetail $offreDetail)
    {
        return view("details.show", ['offreDetail' => $offreDetail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OffreDetail $offreDetail)
    {
        return view("details.edit", ['offreDetail' => $offreDetail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OffreDetail $offreDetail)
    {
        $request->validate([
            "offre_adresse" => ["required",],
            "offre_situation" => ["required",],
            "offre_horaire" => ["required", "numeric"],
            "offre_salaire" => ["required", "min:5", "numeric"],

        ]);
        // dd($request->input());

        $offreDetail->update([
            'adresse_offre' => request('offre_adresse'),
            'situation_offre' => request('offre_situation'),
            'horaire_offre' => request('offre_horaire'),
            'salaire_offre' => request('offre_salaire'),
        ]);

        $offreDetail->save();

        // $offreDetail->up;

        // dd($request->input());
        return redirect("/details/$offreDetail->id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OffreDetail $offreDetail)
    {
        $offreDetail->delete();
        return redirect()->route('detail.index')->with('success', 'Detail supprimé avec succès!');
    }
}
