<?php

namespace App\Http\Controllers;

use App\Http\Requests\depotrequest;
use App\Models\Depot;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $depots = Depot::all();
        return view('home', compact('depots'));
    }
    public function form()
    {
        return view('formulaire');
    }
    public function store(Depot $depot, depotrequest $request)
    {
        $depot->nom = $request->nom;
        $depot->email = $request->email;
        $depot->specialite = $request->specialite;
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('storage', $filename);
        $depot->file = $filename;
        $depot->save();
        toastr()->timeout(5000)->closeButton()->success('CV deposer avec succès !');
        return redirect('/');
    }
    public function edit(Depot $depot)
    {

        return view('edit', compact('depot'));
    }
    public function update(Depot $depot, Request $request)
    {
        $depot->nom = $request->nom;
        $depot->email = $request->email;
        $depot->specialite = $request->specialite;
        if ($request->hasFile('file')) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage', $filename);
            $depot->file = $filename;
        }
        $depot->save();
        toastr()->timeout(5000)->closeButton()->success('CV mis à jour avec succès!');
        return redirect('/home');
    }
    public function delete(Depot $depot)
    {
        $depot->delete();
        toastr()->timeout(5000)->closeButton()->success('CV supprimé avec succès!');
        return redirect('/home');
    }
    public function Cvcontent()
    {
        return view('CV_content');
    }
    public function Cvcontent2()
    {
        return view('CV_content2');
    }
}
