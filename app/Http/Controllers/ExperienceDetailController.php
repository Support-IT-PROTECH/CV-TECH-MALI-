<?php

namespace App\Http\Controllers;

use App\Models\ExperienceDetail;
use Illuminate\Http\Request;

class ExperienceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = ExperienceDetail::latest()->paginate(4);
        return view("experiences.index", ["experiences" => $experiences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("experiences.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "experience_name" => ['required', 'min:3'],
            "id_offre" => ["required", "numeric"]
        ]);

        // dd($request->input());

        $experienceDetail = new ExperienceDetail();
        $experienceDetail->nom = $request->input("experience_name");
        $experienceDetail->offre_id = $request->input("id_offre");
        $experienceDetail->save();

        return redirect('/experiences')->with('success', 'Offre Competence Personnelle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExperienceDetail $experienceDetail)
    {
        return view("experiences.show", ["experienceDetail" => $experienceDetail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExperienceDetail $experienceDetail)
    {
        return view("experiences.edit", ["experienceDetail" => $experienceDetail]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExperienceDetail $experienceDetail)
    {
        $request->validate([
            "experience_name" => ['required', 'min:3'],
        ]);

        $experienceDetail->update([
            "nom" => $request->input("experience_name"),
        ]);

        $experienceDetail->save();

        return redirect('/experiences')->with('success', 'Offre Competence Personnelle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExperienceDetail $experienceDetail)
    {
        $experienceDetail->delete();
        return redirect()->route('experiences.index');
    }
}