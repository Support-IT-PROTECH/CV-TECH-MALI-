<?php

namespace App\Http\Controllers;

use App\Models\competence_technique;
use App\Models\credential;
use App\Models\Experience_obejctif;
use App\Models\Experience_professionnel;
use App\Models\formation;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil_create()
    //afficher le formulaire qui permet de stocker les information du profil de l'utilisateur
    {
        return view('profile.profil_infos');
    }

    public function store_profil(Profile $profile, Request $request)
    {
        //Validation des données du formulaire

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $profile->image = $filename;
        }

        $profile->nom = $request->nom;
        $profile->prenom = $request->prenom;
        $profile->description = $request->description;
        $profile->experience = $request->experience;
        $profile->save();
        return redirect('/profil_create_suite');
    }
    public function profil_create_suite()
    {
        //afficher le formulaire qui permet de stocker les informations supplémentaires du profil de l'utilisateur 
        return view('profile.profil_create_suite');
    }
    public function store_profil_suite(credential $credential, Request $request)
    {
        //Validation des données du formulaire
        $credential->date_naissance = $request->date_naissance;
        $credential->age = $request->age;
        $credential->adresse = $request->adresse;
        $credential->telephone = $request->telephone;
        $credential->email = $request->email;
        $credential->Diplome = $request->diplome;
        $credential->niveau_travail = $request->niveau_travail;
        $credential->save();
        return redirect('/profil_create_formations');
    }
    public function formation_create()
    {
        //afficher le formulaire qui permet de stocker les informations de la formation de l'utilisateur
        return view('profile.formation_infos');
    }
    public function store_formations(formation $formation, Request $request)
    {
        //Validation des données du formulaire
        $formation->nom = $request->nom;
        $formation->duree = $request->duree;
        $formation->lieu = $request->lieu;
        $formation->description = $request->description;
        $formation->save();
        return redirect('profil_create_experiences');
    }
    public function experience_create()
    {
        //afficher le formulaire qui permet de stocker les informations de l'expérience de l'utilisateur
        return view('profile.experience_professionnelle');
    }
    public function store_experiences(Experience_professionnel $experience, Request $request)
    {
        //validation du formaulaire
        $experience->nom = $request->nom;
        $experience->duree = $request->duree;
        $experience->lieu = $request->lieu;
        $experience->save();
        return redirect()->back();
    }
    public function competence_create()
    {
        //afficher le formulaire qui permet de stocker les informations des compétences de l'utilisateur
        return view('profile.competences_techniques');
    }
    public function store_competences(competence_technique $competence_technique, Request $request)
    {
        //validation du formulaire
        $competence_technique->nom = $request->nom;
        $competence_technique->niveau_maitrise = $request->niveau_maitrise;
        $competence_technique->save();
        return redirect()->back();
    }
    public function objectif_create()
    {
        return view("profile.experience_objectif");
    }
    public function store_objectifs(Request $request)
    {
        //validation du formulaire
        $objectifs = new Experience_obejctif();
        $objectifs->list_objectif = $request->objectif;
        $objectifs->save();
        return redirect()->back();
    }
}
