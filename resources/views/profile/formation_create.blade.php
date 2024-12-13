@extends('layouts.appGuest')

@section('content')
    
<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-sm w-75">
        <div class="card-header bg-primary text-white ">
            <h3 class="mb-0 text-center">Formulaire d'informations du profil</h3>
        </div>
        <div class="card-body">
            <form action="{{route('formation_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Nom de l'entreprise -->
               
                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Nom de la formation</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez votre le nom de la formation" required  name="nom">
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Lieu de la formation</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez le lieu de la formation" required  name="lieu">
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">date de la formation</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Exemple: 2015-2016" required  name="date_formation">
                </div>

            
                <!-- Description -->
                <div class="mb-3">
                    <label for="descriptionEntreprise" class="form-label">Description</label>
                    <textarea class="form-control" id="descriptionEntreprise" rows="3" placeholder="Fournissez une brève description de la formation" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Nom de competence</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Exemple: Canvas, Photoshop, Java" required  name="nom_competence[]">
                </div> 

                {{-- <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Nivaux de Maitrise</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Exemple: expert,intermediare,debutant; expert,intermediare,debutant"   name="niveau_maitrise[]">
                </div>  --}}

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Nom Experience</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez le nom votre experience professionnelle"   name="nom_experience">
                </div> 

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Duree</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="2013-2014"   name="duree_experience">
                </div> 

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Lieu Experience</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="BKO, Kalaban Coura"   name="lieu_experience">
                </div> 

                <div class="mb-3">
                    <label for="descriptionEntreprise" class="form-label">Objective_professionnelle</label>
                    <textarea class="form-control" id="descriptionEntreprise" rows="3" placeholder="Exemple: Objective 1, objective 2" name="objective_professionnelle[]"></textarea>
                </div>



            


               

                <!-- Bouton de soumission -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection