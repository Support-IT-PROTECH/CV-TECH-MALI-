<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile_create');
    }

    public function store(Profile $profile, Request $request)
    {

        $profile->nom = $request->nom;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $profile->image = $filename;
        }
        $profile->description = $request->description;
        $profile->experience = $request->experience;
        $profile->date_naissance = $request->date_naissance;
        $profile->age = $request->age;
        $profile->telephone = $request->telephone;
        $profile->email = $request->email;
        $profile->adresse = $request->adresse;
        $profile->diplome = $request->diplome;
        $profile->niveau_travail = $request->niveau_travail;
        $profile->save();
        return redirect('/formation_create');
    }
}
