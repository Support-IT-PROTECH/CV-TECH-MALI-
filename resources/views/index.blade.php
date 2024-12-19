@extends('layouts.appGuest')

@section('content')
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
    <div class="container mt-3" style="min-height: 53vh">
        <div class="col-xl-12">
            <!-- <h6 class="text-muted">Filled Pills</h6> -->
            <div class="nav-align-top mb-4">
                
                <!-- {{-- Bouton Dernières offres & Les entreprise --}} -->
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
                    <!-- {{-- Liste des offres --}} -->
                    <div class="tab-pane fade show active" id="navs-pills-last-offer" role="tabpanel">
                        <div class="row g-3 pt-2">
                            @for ($i = 1; $i <= 6; $i++)
                                <div class="col-md-6 col-lg-4 mt-2">
                                    <div class="card p-1 text-center">
                                        <!-- logo -->
                                        <div class="imgBox p-2">
                                            <img src="assets/img/product-2.jpg"
                                                class="card-img-top w-25 p-1 rounded border border-primary"
                                                alt="..." />
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
                                                <a href="{{ route('job-infos') }}"
                                                    class="btn btn-outline-info fw-semi-bold" style="font-size: 12px">
                                                    En savoir plus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('jobs-list') }}" class="btn btn-outline-primary">Voir plus d'offre</a>
                        </div>
                    </div>

                    <!-- {{-- Listes des entreprises --}} -->
                    <div class="tab-pane fade" id="navs-pills-all-entreprise" role="tabpanel">
                        <div class="row g-3">
                            {{-- Liste des entreprise --}}
                            @foreach ($entreprise as $entreprise)
                            <div class="col-md-6 col-lg-4">
                                <div class="card position-relative pb-4 pt-2 h-100">
                                    <span class="position-absolute top-0 end-0 badge bg-warning">
                                        2 offre(s)
                                    </span>
                                    <div class="imgBox text-center">
                                        <img src="{{asset('images/' . $entreprise->image) }}"
                                            class="card-img-top rounded-circle border-3 border-primary" alt="..."
                                            style="max-width: 25%; border: 2px dashed" />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center p-1">
                                           {{$entreprise->nom}}
                                        </h5>
                                        <p class="card-text mb-2" style="font-size: 11px;">
                                            {{$entreprise->vision}}
                                        </p>
                                        <div class="badgeContenair">
                                            @foreach (explode(',',$entreprise->nom_secteur_activite) as $item)
                                            <span class="badge bg-secondary">{{$item}}</span>
                                            @endforeach
                                            
                                        </div>
                                        <div
                                            class="position-absolute w-100 bottom-0 end-0 text-white text-center mt-0 p-2 rounded-bottom bg-success-light">
                                            <a href="{{route('company-infos', $entreprise->id)}}" class="link">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                
                       
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="btn btn-outline-primary">
                                <i class="bx bx-right-arrow-circle"></i>
                                Explorer plus
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr class="border border-primary border-3 opacity-25" />
    </div>

    <!-- TOP 5 PROFILE SELECTED  -->
    <div class="container text-center">

        <h2 class="card-title fs-2 fw-bold text-uppercase text-center mb-2">
            <i class="bi bi-star-fill"></i>
            Meilleurs Profiles
            <i class="bi bi-star-fill"></i>
        </h2>
        <div class="row g-3">
            @foreach ($profile as $profile)
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow h-100">
                    <div class="card-header p-0">
                        <img src="images/{{$profile->image}}" class="card-img-top w-50 rounded-circle p-2"
                            alt="..." />
                    </div>
                    <div class="card-body pb-0">
                        <h5 class="card-title fw-bold">{{$profile->nom}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                           {{$profile->niveau_travail}}
                        </h6>

                        <span class="badge bg-warning">+3 ans Exp</span>
                    </div>
                    <div class="w-100 text-white text-center mt-0 p-2 rounded-bottom bg-success-light">
                        <a href="{{ route('top-profile',$profile->id) }}" class="link fw-semi-bold">
                            <i class="bi bi-info-circle"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
