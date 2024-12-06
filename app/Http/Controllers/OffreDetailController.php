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
        return view('details.index');
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
            'offre_adresse' => ['required'],
            'offre_situation' => ['required'],
            'offre_horaire' => ['required'],
            'offre_salaire' => ['required'],
        ]);

        // dd($request->input());
        // OffreDetail::create([
        //     'adresse_offres' => $request->input('offre_adresse'),
        //     'situation_offres' => $request->input('offre_situation'),
        //     'horaire_offres' => $request->input('offre_horaire'),
        //     'salaire_offres' => $request->input('offre_salaire'),
        // ]);
        // dd($request->input());

        $detail = new OffreDetail;
        $detail->adresse_offres = $request->input('offre_adresse');
        $detail->situation_offres = $request->input('offre_situation');
        $detail->horaire_offres = $request->input('offre_horaire');
        $detail->salaire_offres = $request->input('offre_salaire');
        $detail->save();



        return redirect()->route('details.index')->with('success', 'Detail Offre ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(OffreDetail $offreDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OffreDetail $offreDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OffreDetail $offreDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OffreDetail $offreDetail)
    {
        //
    }
}