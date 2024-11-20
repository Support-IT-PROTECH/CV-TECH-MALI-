@extends('layouts.appGuest')

@section('content')
    <style>

    </style>
    <!-- Upload CV content -->
    <div class="" style="min-height: 15vh; ">
        <div class="card upload-cv border-0 h-100 d-flex align-items-center justify-content-center  pt-5 pb-5">
            <div class="">
                <div class="cv-caption text-center">
                    <h2 class="fw-bold"> Démarquez-vous avec un CV <br>en ligne unique ! </h2>
                    <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary border-btn1" data-bs-toggle="modal"
                            data-bs-target="#modalCenterUploadCV">
                            Déposer mon CV
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenterUploadCV" tabindex="-1" style="display: none;"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center text-uppercase w-100" id="modalCenterTitle">
                                            Formulaire de dépot du CV</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="identifiant"
                                                    placeholder="Traoré Amadou">
                                                <label for="identifiant">Nom et Prénom</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="specialite"
                                                    placeholder="Marketing Digital">
                                                <label for="specialite">Spécialité</label>
                                            </div>
                                            <div>
                                                <a href="#" class="border-btn2 border-btn4"
                                                    onclick="document.getElementById('fileInput').click(); return false;">Charger
                                                    le CV</a>
                                                <input type="file" id="fileInput" style="display:none;" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                                Fermer
                                            </button>
                                            <input type="submit" class="btn btn-primary" value="Soumettre">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="border border-primary border-3 opacity-25">
    </div>

    <!-- offre content and Company content -->
    <div class="container mt-3" style="min-height: 53vh;">
        <div class="col-xl-12">
            <!-- <h6 class="text-muted">Filled Pills</h6> -->
            <div class="nav-align-top mb-4">

                {{-- Bouton Dernières offres & Les entreprise --}}
                <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active text-uppercase fw-bold" role="tab"
                            data-bs-toggle="tab" data-bs-target="#navs-pills-last-offer"
                            aria-controls="navs-pills-last-offer" aria-selected="true">
                            <i class="tf-icons bx bx-home"></i> Dernières Offres
                            <!-- <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span> -->
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link text-uppercase fw-bold" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-pills-all-entreprise" aria-controls="navs-pills-all-entreprise"
                            aria-selected="false">
                            <i class="tf-icons bx bx-home"></i> Les entreprises
                        </button>
                    </li>

                </ul>

                <div class="tab-content">

                    {{-- Liste des offres --}}
                    <div class="tab-pane fade show active" id="navs-pills-last-offer" role="tabpanel">

                        <div class="row">
                            {{-- @for ($i = 1; $i <= 4; $i++)
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-3 d-flex align-items-center p-1">
                                                <img class="card-img card-img-left"
                                                    src="{{ asset('assets/img/elements/' . $i . '.jpg') }}"
                                                    alt="Card image">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">Africa Agency Mining</h5>
                                                    <p class="card-text">
                                                        Récrute : 1 Spécialiste en Marketing Digital
                                                    </p>
                                                    <a href="#" class="link">En savoir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endfor --}}

                            @foreach ($travails as $travail)
                                <div class="col-md-6">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-3 d-flex align-items-center p-1">
                                                <img class="card-img card-img-left"
                                                    src="./image/{{ $travail->company_logo }}" alt="Card image">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $travail->company_name }}</h5>
                                                    <p class="card-text">
                                                        Récrute : {{ $travail->offre_name }}
                                                    </p>
                                                    <a href="#" class="link">En savoir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                        <div class="text-center">
                            {{-- <a href="#" class="btn btn-outline-primary">Voir plus d'offre</a> --}}
                            {{-- {{ $travails->links() }} --}}
                            {{ $travails->links() }}

                        </div>

                    </div>

                    {{-- Listes des entreprises --}}
                    <div class="tab-pane fade" id="navs-pills-all-entreprise" role="tabpanel">

                        <div class="row">

                            @for ($i = 1; $i <= 6; $i++)
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="row g-0 ps-3 pe-3">
                                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                                <img class="card-img"
                                                    src="{{ asset('assets/img/elements/' . $i . '.jpg') }}"
                                                    alt="Card image">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body">
                                                    <h5 class="card-title">Africa Agency Mining</h5>
                                                    <p class="card-text">
                                                        Spécialiste en Marketing Digital
                                                    </p>
                                                    <a href="#" class="">En savoir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor


                        </div>
                        <div class="text-center">
                            <a href="listETS.html" class="btn btn-outline-primary">
                                <i class='bx bx-right-arrow-circle'></i>
                                Explorer plus
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
