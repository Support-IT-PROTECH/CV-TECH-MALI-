@extends('layouts.appUserAuth')

@section('content')
    <style>
        .stats-widget {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .stats-widget h5 {
            font-size: 1.2rem;
            margin: 0;
        }

        .stats-widget span {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .carousel-control-prev,
        .carousel-control-next {
            color: #000;
        }
    </style>

    <div class="pagetitle">
        <h1>Tableau de board</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active">Tableau de board</li>
            </ol>
        </nav>
    </div>

    <div class="container my-1">
        <!-- 1. En-tête -->
        <div class="row mb-4">
            <div class="col-md-6 d-flex align-items-center">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle me-3"
                    style="width: 70px; height: 70px;">
                <div>
                    <h4 class="fw-bold">Bienvenue, Moussa Sangaré</h4>
                </div>
            </div>
            <div class="col-md-6 d-md-flex flex-column align-items-end justify-content-center my-2">
                <p class="m-0">Profil complété à 75%</p>
                <div class="progress" style="width: 150px;">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- 2. Résumé des activités -->
        <div class="row mb-4">
            <!-- Dernières candidatures -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h5 class="m-0">Dernières candidatures</h5>
                    </div>
                    <div class="card-body py-2">
                        <ul class="list-group" style="font-size: 13px">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Marketing Manager - Africa Mining Agency.
                                <span class="badge bg-warning">En attente</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Data Analyst - PROTECH.
                                <span class="badge bg-danger">Rejetée</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Developer - TechWorld
                                <span class="badge bg-success">Acceptée</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-info mt-4">Toutes mes candidatures</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CV -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-secondary text-white">
                        <div class="m-0">Mon CV</div>
                    </div>
                    <div class="card-body text-center pt-3">
                        <p class="text-muted"> <i class="bi bi-calendar3"></i> Dernier mis à jour : 05 Décembre 2024</p>
                        <a href="{{ route('admin.profile') }}" class="btn btn-outline-info">Mettre à jour</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Statistiques personnelles -->
        <div class="row">
            <!-- Total candidatures Card -->
            <div class="col-sm-6 col-md-4">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Total <span>| Candidatures</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div class="ps-3">
                                <h6>145</h6>
                                <span class="text-success small pt-1 fw-bold">12%</span>
                                <span class="text-muted small pt-2 ps-1">augmente</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Total candidatures Card -->

            <!-- Vues sur le CV  Card -->
            <div class="col-sm-6 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Vues <span>| sur le CV</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-eye"></i>
                            </div>
                            <div class="ps-3">
                                <h6>34</h6>
                                <span class="text-success small pt-1 fw-bold">8%</span>
                                <span class="text-muted small pt-2 ps-1">augmente</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Vues sur le CV  Card -->

            <!-- Offres sauvégardées Card -->
            <div class="col-sm-12 col-md-4">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Offres <span>| sauvegardées</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-bookmark"></i>
                            </div>
                            <div class="ps-3">
                                <h6>8</h6>
                                <span class="text-danger small pt-1 fw-bold">12%</span>
                                <span class="text-muted small pt-2 ps-1">diminue</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Offres sauvégardées Card -->

        </div>



        <!-- 4. Offres d’emploi recommandées -->
        <div class="mb-4">
            <div class="fw-bold card-title fs-3 my-0">Offres d'emploi recommandées</div>
            <div class="row g-3 pt-2">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col-sm-<?php echo $i == 3 ? '12' : '6'; ?> col-md-4 mt-2">
                        <div class="card p-1 text-center">
                            <!-- logo -->
                            <div class="imgBox p-2">
                                <img src="assets/img/product-5.jpg"
                                    class="card-img-top w-25 p-1 rounded border border-primary" alt="..." />
                            </div>

                            <!-- Contenu -->
                            <div class="card-body">
                                <h5 class="card-title pt-2 pb-2 fw-bold" style="font-size: 100%">
                                    Spécialiste Marketing Digital
                                </h5>
                                <a href="#" class="card-link">
                                    <h6 class="card-subtitle fw-bold mb-2 text-body-secondary">
                                        <i class="bi bi-buildings-fill"></i>
                                        Africa Mining Agency
                                    </h6>
                                </a>

                                <div class="row">
                                    <div class="col-6 text-start">
                                        <!-- Contenu de la colonne gauche -->
                                        <h6 class="fw-bold card-title m-0 p-1" style="font-size: 11px">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            BKO, ACI 2000
                                        </h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <!-- Contenu de la colonne droite -->
                                        <h6 class="fw-bold card-title m-0 p-1" style="font-size: 11px">
                                            <i class="bi bi-clock-fill"></i>
                                            Temps Plein
                                        </h6>
                                    </div>
                                </div>
                                <hr class="border border-primary border-1 opacity-25 m-0" />
                                <div class="border-0 mt-4 p-0">
                                    <a href="{{ route('job-infos') }}" class="btn btn-outline-info fw-semi-bold"
                                        style="font-size: 12px">
                                        En savoir plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center">
                <a href="{{ route('jobs-list') }}" class="btn btn-outline-primary">Plus d'offres</a>
            </div>
        </div>

    </div>
@endsection
