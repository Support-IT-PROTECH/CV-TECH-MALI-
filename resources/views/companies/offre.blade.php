@extends('layouts.appUserAuth')

@section('content')
    <div class="pagetitle">
        <h1>Nos offres</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Tableau de board</a></li>
                <li class="breadcrumb-item">Mon compte</li>
                <li class="breadcrumb-item active">offres</li>
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


                <div class="datatable-wrapper datatable-loading no-footer searchable fixed-columns">

                    <style>
                        .datatable-wrapper .datatable-container .datatable thead {
                            display: none;
                        }
                    </style>
                    <div class="datatable-container">
                        <table class="mb-3 datatable" id="offreDatatable">
                            @php
                                $num = 7;
                            @endphp
                            @for ($i = 0; $i < $num; $i++)
                                <tr class="card p-2 w-100 shadow mt-2 mb-0">

                                    <td class="">
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

                                        <style>
                                            @media (width <=575px) {
                                                .list-company-offre img {
                                                    scale: 0.85;
                                                }

                                                .list-company-offre .card-title, 
                                                .list-company-offre .limite-date {
                                                    text-align: center;
                                                }
                                                .list-company-offre .limite-date{
                                                    border: 1px solid #ccc;
                                                }

                                            }
                                        </style>

                                        <div class="list-company-offre row align-items-center justify-content-center">
                                            <div class="col-md-2 col-lg-2 col-sm-2">
                                                <img src="{{ asset('assets/img/news-2.jpg') }}" alt=""
                                                    class="card-img" />
                                            </div>

                                            <div class="col-md-8 col-lg-8 col-sm-10">
                                                <div class="card-body pb-0">
                                                    <h5 class="card-title pt-0 pb-2 fw-bold" style="font-size: 100%">
                                                        Communication {{ $i }}
                                                    </h5>

                                                    <div class="row row-cols-1 row-cols-xs-2 row-cols-md-3 row-cols-sm-3 g-2"
                                                        style="font-size: 13px; font-weight: 600">
                                                        <div class="col">
                                                            <h6 class="card-title m-0 p-1" style="font-size: 90%">
                                                                <i class="me-2 bi bi-geo-alt"></i>
                                                                BKO, ACI 2000
                                                            </h6>
                                                        </div>

                                                        <div class="col">
                                                            <h6 class="card-title m-0 p-1" style="font-size: 90%">
                                                                <i class="me-2 bi bi-briefcase"></i> Temps Plein
                                                            </h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="card-title m-0 p-1" style="font-size: 90%">
                                                                <i class="me-2 bi bi-mortarboard"></i>
                                                                BAC +5
                                                            </h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="card-title m-0 p-1" style="font-size: 90%">
                                                                <i class="me-2 bi bi-hourglass-bottom"></i>
                                                                Exp +4
                                                            </h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="card-title m-0 p-1" style="font-size: 90%">
                                                                <i class="me-2 bi bi-clock"></i>
                                                                40 H(s) / S
                                                            </h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="card-title m-0 p-1" style="font-size: 90%">
                                                                <i class="me-2 bi bi-cash-stack"></i>
                                                                250.000F / M
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-lg-2 col-sm-12">
                                                <div class="">
                                                    <div class="p-2">
                                                        <h6 class="limite-date fw-bold card-title text-warning text-center m-0 p-1"
                                                            style="font-size: 11px">
                                                            <i class="bi bi-calendar"></i>
                                                            12/12/2024
                                                        </h6>
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

            </div>

        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Récupérer l'élément <select> par sa classe
            var selectElement = document.querySelector('.datatable-selector');

            // Créer une nouvelle option avec la valeur "3"
            var newOption = document.createElement('option');
            newOption.value = "3";
            newOption.text = "3";

            // Ajouter la nouvelle option au <select>
            selectElement.appendChild(newOption);

            // Changer la sélection à l'option avec la valeur "3"
            for (var i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].value === "3") {
                    // Sélectionner l'option avec la valeur "3"
                    selectElement.options[i].selected = true;
                } else {
                    // Désélectionner les autres options
                    selectElement.options[i].selected = false;
                }
            }

            // Déclencher l'événement "change" manuellement pour mettre à jour la datatable
            selectElement.dispatchEvent(new Event('change'));

            // Vérifier la nouvelle valeur sélectionnée
            console.log(selectElement.value); // Affiche "3"


        });
    </script>
@endsection
