@extends('layouts.appGuest')

@section('content')
    
<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-sm w-75">
        <div class="card-header bg-primary text-white ">
            <h3 class="mb-0 text-center">Formulaire d'informations sur l'entreprise</h3>
        </div>
        <div class="card-body">
            <form action="{{route('entreprise_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Nom de l'entreprise -->
                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Logo de l'entreprise</label>
                    <input type="file" class="form-control" id="nomEntreprise"  name="image">
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Nom de l'entreprise</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez le nom de l'entreprise" required  name="nom">
                </div>

                <!-- Domaine -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Domaine</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Exemple : Technologie" name="domaine">
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="descriptionEntreprise" class="form-label">Description</label>
                    <textarea class="form-control" id="descriptionEntreprise" rows="3" placeholder="Fournissez une brève description de l'entreprise" name="description"></textarea>
                </div>

                <!-- Vision -->
                <div class="mb-3">
                    <label for="visionEntreprise" class="form-label">Vision</label>
                    <textarea class="form-control" id="visionEntreprise" rows="3" placeholder="Décrivez la vision de l'entreprise" name="vision"></textarea>
                </div>

                <!-- Nom des valeurs -->
                <div class="mb-3">
                    <label for="valeursEntreprise" class="form-label">Valeurs</label>
                    <textarea class="form-control" id="visionEntreprise" rows="3" placeholder="Exemple : Phrase 1, Phrase 2, Phrase 3" name="valeurs[]"></textarea>
                </div>

                <!-- Secteur d'activité -->
                <div class="mb-3">
                    <label for="secteurActivite" class="form-label">Secteur d'activité</label>
                    <input type="text" class="form-control" id="valeursEntreprise" placeholder="Exemple : Innovation, Intégrité, Responsabilité" name="secteur_d_activite[]">
                </div>

                <div class="mb-3">
                    <label for="nomEntreprise" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="nomEntreprise" placeholder="Entrez l'adresse de l'entreprise " name="adresse">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Email</label>
                    <input type="email" class="form-control" id="domaineEntreprise" placeholder="Entrez l'adresse de l'entreprise" name="email">
                </div>

                <!-- Telephone -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Telephone</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Entrez le numero de telephone " name="telephone">
                </div>

                <!-- URl -->
                <div class="mb-3">
                    <label for="domaineEntreprise" class="form-label">Site Web</label>
                    <input type="text" class="form-control" id="domaineEntreprise" placeholder="Entrez l'URL du site Web" name="url">
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