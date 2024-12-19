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

        .datatable-top {
            display: none;
        }

        .datatable-container thead {
            display: none !important;
        }

        .datatable-bottom {
            display: flex;
            align-content: center !important;
            justify-content: center !important;
        }

        .datatable-bottom .datatable-info {
            display: none !important;
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
                <img src="https://aamining.net/wp-content/uploads/2022/10/logo-aamining-web.png" alt="Profile"
                    class="rounded-circle me-3" style="width: auto; height: 70px;">
                <div>
                    <h4 class="fw-bold">Bienvenue, Africa Mining Agency</h4>
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
            <!-- Dernières offres publiée(s) -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-warning text-white">
                        <h5 class="m-0">Dernière(s) offre(s) publiée(s)</h5>
                    </div>
                    <div class="card-body py-2">
                        <ul class="list-group" style="font-size: 13px">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Marketing Manager - Africa Mining Agency.
                                <span class="badge bg-info">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Data Analyst - PROTECH.
                                <span class="badge bg-info">23</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Developer - TechWorld
                                <span class="badge bg-info">45</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-info mt-4">Toutes mes offres</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CV -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-secondary text-white">
                        <div class="m-0">Mes informations</div>
                    </div>
                    <div class="card-body text-center pt-3">
                        <p class="text-muted"> <i class="bi bi-calendar3"></i> Dernier mis à jour : 05 Décembre 2024</p>
                        <a href="{{ route('company.profile') }}" class="btn btn-outline-info">Mettre à jour</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Statistiques personnelles -->
        <div class="row">
            <!-- Total offres publiée(s) Card -->
            <div class="col-sm-6 col-md-4">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Total <span>| offre(s) publiée(s)</span></h5>

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
                        <h5 class="card-title">Vues <span>| sur l'entreprise'</span></h5>

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
                        <h5 class="card-title">Profile <span>| sauvegardés</span></h5>

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
        <div class="">
            <?php $num = 4; ?>
            <div class="row align-items-center ms-1">
                <div class="col-md-6 col-lg-6 col-sm-6 card-title fs-4 fw-bold">Nos offres en cours
                    <span class="badge text-bg-warning fw-bold">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 text-end">
                    <a href="#" class="btn btn-outline-info">Nouvelle offre</a>
                </div>

            </div>

            <!-- Job list -->
            <div class="row justify-content-center">

                <div class="col-md-12 jobs-container pt-0">
                    <!-- job card -->

                    <table class="w-100 mb-3 datatable" id="tableOffre">

                        @for ($i = 0; $i < $num; $i++)
                            <tr class="card p-2 w-100 shadow mt-2 mb-0">
                                <td class="">
                                    <div class="filter">
                                        <a class="icon text-danger fw-bold" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li><a class="dropdown-item text-info" href="#">Modifier</a></li>
                                            <li><a class="dropdown-item text-danger" href="#">Supprimer</a></li>
                                        </ul>
                                    </div>
                                    <div class="row align-items-center justify-content-center">

                                        <div class="col-md-2 col-lg-2 col-sm-4">
                                            <img src="{{ asset('assets/img/news-2.jpg') }}" alt=""
                                                class="card-img" />
                                        </div>

                                        <div class="col-md-10 col-lg-10 col-sm-8">
                                            <div class="card-body pb-0">
                                                <h5 class="card-title pt-0 pb-2 fw-bold" style="font-size: 100%">
                                                    Communication
                                                </h5>

                                                <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-2"
                                                    style="font-size: 13px; font-weight: 600">
                                                    <div class="col">
                                                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                            <i class="me-2 bi bi-geo-alt"></i>
                                                            BKO, ACI 2000
                                                        </h6>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                            <i class="me-2 bi bi-briefcase"></i> Temps Plein
                                                        </h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                            <i class="me-2 bi bi-mortarboard"></i>
                                                            BAC +5
                                                        </h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                            <i class="me-2 bi bi-hourglass-bottom"></i>
                                                            Exp +4
                                                        </h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                            <i class="me-2 bi bi-clock"></i>
                                                            40 H(s) / S
                                                        </h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                            <i class="me-2 bi bi-cash-stack"></i>
                                                            250.000F / M
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endfor

                    </table>
                </div>

            </div>
            <div class="text-center">
                <a href="{{ route('company.offre') }}" class="btn btn-outline-primary">Toutes les offres</a>
            </div>
        </div>

    </div>
@endsection
