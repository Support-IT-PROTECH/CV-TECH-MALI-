@extends('layouts.appGuest')

@section('content')

    <!-- Header -->
    <div class="container my-4 text-center">
        <h1 class="fw-bold text-uppercase card-title text-uppercase fs-1">Liste des entreprises</h1>
        <p class="text-muted">Explorez les entreprises partenaires et découvrez leurs opportunités d'emploi</p>
    </div>

    <!-- Barre de recherche et filtres -->
    <div class="container my-4">
        <form class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Rechercher une entreprise">
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option value="" selected>Secteur d'activité</option>
                    <option value="Tech">Technologie</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option value="" selected>Localisation</option>
                    <option value="Bamako">Bamako</option>
                    <option value="Sikasso">Sikasso</option>
                    <option value="Kayes">Kayes</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option value="" selected>Offres disponibles</option>
                    <option value="0">0</option>
                    <option value="1-5">1-5</option>
                    <option value="5+">5+</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Liste des entreprises -->
    <div class="container my-4">
        <div class="row g-4">
            <!-- Exemple de carte d'entreprise -->
            @for ($i = 0; $i < 9; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="card card-company shadow-sm">
                        <div class="card-body text-center">
                            <img src="assets/img/news-2.jpg" alt="Logo" class="mb-3 rounded-circle"
                                style="width: 80px; height: 80px;">
                            <h5 class="card-title fw-bold">Nom de l'entreprise</h5>
                            <p class="text-muted mb-2">Secteur : Technologie</p>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt"></i> Bamako</p>
                            <span class="badge bg-primary mb-3">5 Offres disponibles</span>
                            <div>
                                <a href="companyDetails.html" class="btn btn-outline-info btn-sm">En savoir
                                    plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!-- Pagination -->
    {{-- <div class="container text-center my-4">
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
            </ul>
        </nav>
    </div> --}}
@endsection
