<?php

namespace App\Http\Controllers;

use App\Models\Travail;
use Illuminate\Http\Request;

class TravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travails = Travail::all();
        return view("travail.index", compact('travails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("travail.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company' => ['required', 'max:255', 'min:3', 'string'],
            'offre' => ['required', 'max:255', 'min:3', 'string'],

        ]);

        $travail = new Travail();
        $travail->company_name = $request->company;
        // $travail->company_logo = $request->file('logo');
        $travail->offre_name = $request->offre;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('image', $filename);
            $travail->company_logo = $filename;
        }
        $travail->save();

        return redirect()->route('travail.index')->with('success', 'Offre Ajoutée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Travail $travail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travail $travail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travail $travail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travail $travail)
    {
        //
    }
}