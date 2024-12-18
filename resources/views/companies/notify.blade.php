@extends('layouts.appUserAuth')

@section('content')
    <div class="pagetitle">
        <h1>Mes notifications</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('company.home') }}">Tableau de board</a></li>
                <li class="breadcrumb-item">Mon compte</li>
                <li class="breadcrumb-item active">Notifications</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <style>
        .datatable-top {
            display: none;
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

    {{-- Off canva --}}
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
            <div class="pb-4 text-center d-flex align-items-center justify-content-between">
                <a href="#" class="btn btn-outline-primary fw-semi-bold" style="font-size: 12px">
                    Modifier
                </a>
                <a href="{{ route('job-infos') }}" class="btn btn-outline-info fw-semi-bold" style="font-size: 12px">
                    Voir détails
                </a>
                <a href="#" class="btn btn-outline-danger fw-semi-bold" style="font-size: 12px">
                    Supprimer
                </a>
            </div>
        </div>
    </div>

    <div class="section notification">

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

                <h5 class="card-title">Liste <span>| Tout</span></h5>


                <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">

                    <style>
                        .datatable-wrapper .datatable-container .datatable thead {
                            display: none;
                        }
                    </style>
                    <div class="datatable-container">
                        <table class="mb-3 datatable" id="offreDatatable">

                            <style>
                                @media (width <=575px) {
                                    .list-company-offre img {
                                        scale: 0.85;
                                    }

                                    .list-company-offre .card-title,
                                    .list-company-offre .limite-date {
                                        text-align: center;
                                    }

                                    .list-company-offre .limite-date {
                                        border: 1px solid #ccc;
                                    }

                                }
                            </style>
                            @php
                                $num = 7;
                            @endphp
                            @for ($i = 0; $i < $num; $i++)
                                <tr class="card p-2 w-100 mt-2 mb-0">

                                    <td class="py-0 my-0    ">
                                        <div class="filter">
                                            <a class="icon text-danger fw-bold" href="#" data-bs-toggle="dropdown"><i
                                                    class="bi bi-three-dots"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <li><a class="dropdown-item text-success my-0 py-1 d-flex align-items-center"
                                                        href="#">
                                                        <i class="bi bi-eye me-2"></i>Voir l'offre
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item text-info my-0 py-1 d-flex align-items-center"
                                                        href="#">
                                                        <i class="bi bi-pencil me-2"></i>Modifier
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item text-danger my-0 py-1 d-flex align-items-center"
                                                        href="#">
                                                        <i class="bi bi-trash me-2"></i>Supprimer
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="py-0 my-0 list-notify row align-items-center justify-content-center">
                                            <div class="card-title fw-bold py-0 my-1">
                                                Nouvelle candidature reçue -
                                                <span class="badge bg-warning text-light rounded-pill"
                                                    style="font-size: 12px;">11/12/2024</span> -
                                                <span class="badge bg-info text-light rounded-pill"
                                                    style="font-size: 12px;">Nouveau</span>
                                            </div>
                                            <div class="card-body py-0 mb-1">
                                                Un candidat a postulé pour le poste <strong>Développeur Web</strong>.
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Récupérer l'élément <select> par sa classe
            var selectElement = document.querySelector('.datatable-selector');

            // Changer la sélection à l'option avec la valeur "3"
            for (var i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].value === "15") {
                    // Sélectionner l'option avec la valeur "3"
                    selectElement.options[i].selected = true;
                } else {
                    // Désélectionner les autres options
                    selectElement.options[i].selected = false;
                }
            }

            // Déclencher l'événement "change" manuellement pour mettre à jour la datatable
            selectElement.dispatchEvent(new Event('change'));

        });
    </script>
@endsection
