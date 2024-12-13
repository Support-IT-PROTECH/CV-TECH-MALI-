@extends('layouts.appGuest')

@section('content')
    
<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-sm w-75">
        <div class="card-header bg-primary text-white ">
            <h3 class="mb-0 text-center">Formulaire d'informations du profil</h3>
        </div>
        <div class="card-body">
            <form action="{{route('profile_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Nom de l'entreprise -->
               
                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez votre nom complet" required  name="nom">
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Image</label>
                    <input type="file" class="form-control" id="nomEntreprise"  name="image">
                </div>


                <!-- Description -->
                <div class="mb-3">
                    <label for="descriptionEntreprise" class="form-label">Description</label>
                    <textarea class="form-control" id="descriptionEntreprise" rows="3" placeholder="Fournissez une brève description de vous" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="descriptionEntreprise" class="form-label">Experience</label>
                    <textarea class="form-control" id="descriptionEntreprise" rows="3" placeholder="Fournissez une brève description de vos Experiences" name="experience"></textarea>
                </div> 

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Date_naissance</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez votre date_naissance" name="date_naissance">
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Age</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez votre age " name="age">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Email</label>
                    <input type="email" class="form-control" id="domaineEntreprise" placeholder="Entrez l'email" name="email">
                </div>

                <!-- Telephone -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Telephone</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Entrez le numero de telephone " name="telephone">
                </div>

                <!-- URl -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Entrez votre adresse" name="adresse">
                </div>

                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Diplome</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Dernier Diplome" name="diplome">
                </div>

                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Niveau travail</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Exemple: freelance ou particulier" name="niveau_travail">
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