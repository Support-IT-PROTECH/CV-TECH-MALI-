<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Travail;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travails = Travail::latest()->paginate(4);
        return view('entreprises.index', ['travails' => $travails]);
    }
    public function offre()
    {
        $travails = Travail::latest()->paginate(4);
        return view('entreprises.offre', ['travails' => $travails]);
    }
    public function page()
    {
        $travails = Travail::latest()->paginate(4);
        return view('entreprises.secondpage', ['travails' => $travails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
}
