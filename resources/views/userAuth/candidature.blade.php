@extends('layouts.appUserAuth')

@section('content')
    <div class="pagetitle">
        <h1>Mes candidatures</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Tableau de board</a></li>
                <li class="breadcrumb-item">Mon compte</li>
                <li class="breadcrumb-item active">Candidatures</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <style>
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


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOffreDetail" aria-labelledby="offcanvasOffreDetailLabel">
        <div class="offcanvas-header">
            <div class="offcanvas-title card-title fs-4 pt-2 pb-2 fw-bold" style="font-size: 100%"
                id="offcanvasOffreDetailLabel">
                Détails de l'offre
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- logo -->
            <div class="imgBox p-2 text-center">
                <img src="{{ asset('assets/img/product-2.jpg') }}"
                    class="card-img-top w-25 p-1 rounded border border-primary" alt="..." />
            </div>
            <h5 class="card-title pt-2 pb-2 fw-bold text-center" style="font-size: 100%">
                Spécialiste Marketing Digital
            </h5>
            <h6 class="card-subtitle fw-bold text-body-secondary text-center">
                <a href="#" class="">
                    <i class="bi bi-buildings-fill"></i>
                    Africa Mining Agency
                </a>
            </h6>
            <div class="date-limite p-3 text-center">
                <span class="badge bg-danger fw-bold" style="font-size: 12px;">
                    <i class="bi bi-calendar"></i> Date limite : 23/12/2024
                </span>
            </div>
            <div class="row g-2" style="font-size: 13px; font-weight: bold">
                <div class="col col-6">
                    <div class="card-title m-0 p-2 shadow rounded" style="font-size: 100%">
                        <i class="me-2 bi bi-geo-alt"></i>
                        BKO, ACI 2000
                    </div>
                </div>

                <div class="col col-6">
                    <div class="card-title m-0 p-2 shadow rounded" style="font-size: 100%">
                        <i class="me-2 bi bi-briefcase"></i> Temps Plein
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card-title m-0 p-2 shadow rounded" style="font-size: 100%">
                        <i class="me-2 bi bi-mortarboard"></i>
                        BAC +5
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card-title m-0 p-2 shadow rounded" style="font-size: 100%">
                        <i class="me-2 bi bi-hourglass-bottom"></i>
                        Exp +4
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card-title m-0 p-2 shadow rounded" style="font-size: 100%">
                        <i class="me-2 bi bi-clock"></i>
                        40 H(s) / S
                    </div>
                </div>
                <div class="col col-6">
                    <div class="card-title m-0 p-2 shadow rounded" style="font-size: 100%">
                        <i class="me-2 bi bi-cash-stack"></i>
                        250.000F / M
                    </div>
                </div>
            </div>


        </div>
        <div class="offcanvas-footer">
            <div class="pb-4 text-center">
                <a href="{{ route('job-infos') }}" class="btn btn-outline-primary fw-semi-bold" style="font-size: 12px">
                    En savoir plus
                </a>
                <a href="#" class="ms-2 btn btn-outline-danger fw-semi-bold" style="font-size: 12px">
                    Annuler le poste
                </a>
            </div>
        </div>
    </div>

    <div class="section candidature">

        <div class="card recent-sales overflow-auto">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Semaine</a></li>
                    <li><a class="dropdown-item" href="#">Mois</a></li>
                    <li><a class="dropdown-item" href="#">Année</a></li>
                </ul>
            </div>

            <div class="card-body">

                <h5 class="card-title">Liste <span>| Semaine</span></h5>

                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

                    <div class="datatable-container">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th scope="col" data-sortable="true">#</th>
                                    <th scope="col" data-sortable="true">Offre d'emploi</th>
                                    <th scope="col" data-sortable="true">Entreprise</th>
                                    <th scope="col" data-sortable="true">Soumission</th>
                                    <th scope="col" data-sortable="true">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 9; $i++)
                                    <tr data-index="{{ $i }}">
                                        <td scope="row"><a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasOffreDetail"
                                                aria-controls="offcanvasOffreDetail">#2{{ $i }}57</a></td>
                                        <td>Spécialiste Marketing Digital</td>
                                        <td><a href="#" class="text-primary">
                                                <i class="bi bi-buildings-fill"></i> Africa Mining Agency
                                            </a>
                                        </td>
                                        <td>12/12/2024</td>
                                        <td class="green"><span class="badge bg-warning">En attente</span></td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
