@extends('layouts.appGuest')

@section('content')
    <!-- job Details Section -->

    <!-- Détails qui seront positionnés au-dessus de la carte -->
    <div class="card p-3 position-relative" id="first-card"
        style="
            min-height: 40vh;
            margin-top: -15vh;
            background-image: url('{{ asset('assets/img/backgrounds/fond-1.jpg') }}');
            background-size: cover;
          ">
        <div class="position-absolute top-100 start-50 translate-middle w-75 container p-2 card shadow" id="second-card">

            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-2">
                    <img class="w-75 p-1 border rounded" src="{{ asset('uploads/1734014547.jpg') }}" alt="" />
                </div>
                <div class="col position-relative">

                    <h5 class="card-title pt-0 pb-2 fw-bold" style="font-size: 100%">
                        {{-- Assistant(e) Communication --}}
                        {{ $offres->nom_offre }}

                    </h5>
                    <h6 class="card-subtitle fw-bold mb-2 text-body-secondary">
                        <i class="bi bi-buildings-fill"></i>
                        Africa Mining Agency
                    </h6>
                    <span class="fw-bold text-danger" style="font-size: 12px;"> <i class="bi bi-calendar"></i> Date limite :
                        {{ $offres->date_limite }}</span>

                </div>
            </div>

            <div class="">
                <hr class="w-100 border border-primary border-1 opacity-25 m-1" />
            </div>

            <div class="description p-1" style="font-size: 14px; text-align: justify;" id="description">
                {{-- Nous recherchons un(e) Assistant(e) Communication dynamique et
                créatif(ve) pour rejoindre notre équipe. Dans ce rôle, vous serez
                en charge de la gestion et du développement de la communication
                interne et externe de l'entreprise. Vous travaillerez en étroite
                collaboration avec les départements marketing et communication
                pour contribuer à l'optimisation de notre image de marque et
                renforcer la notoriété de l'entreprise. --}}

                {{ $offres->description }}
            </div>

            <div class="mt-2">
                <button class="btn btn-outline-primary me-3">
                    Postuler maintenant
                </button>

                <a href="{{ route('company-infos') }}" class="btn btn-outline-info">Voir l'entreprise</a>
            </div>
        </div>
    </div>

    <div class="job-details-content" id="job-details-content">
        <!-- A propos de ce role -->
        <div class="row mt-32">
            <div class="col-12 col-md-9">
                <h4 class="card-title fs-4 fw-bold">A propos de votre rôle</h4>
                <p style="text-align: justify;">
                    {{-- En tant qu'Assistant(e) Communication, vous aurez pour mission
                    principale de soutenir les équipes dans la création de supports
                    visuels et écrits, la gestion des réseaux sociaux, ainsi que
                    l'organisation d'événements et de campagnes de communication.
                    Vous serez également responsable de la production de contenus
                    pour les différents canaux de communication de l'entreprise,
                    tout en respectant l'identité et les valeurs de la marque. --}}

                    {{ $offres->role }}
                </p>
            </div>
            <div class="col-12 col-md-3 shadow rounded mt-4">
                <div class="pt-2 pb-2">
                    <div class="row row-cols-1 row-cols-md-1 row-cols-sm-3 g-2" style="font-size: 13px; font-weight: 600">
                        <div class="col">
                            <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                <i class="me-2 bi bi-geo-alt"></i>
                                {{-- BKO, ACI 2000 --}}
                                {{ $offres->adresse_offre }}
                            </h6>
                        </div>

                        <div class="col">
                            <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                <i class="me-2 bi bi-briefcase"></i> {{ $offres->situation_offre }}
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
                                {{ $offres->horaire_offre }} H(s) / S
                            </h6>
                        </div>
                        <div class="col">
                            <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                <i class="me-2 bi bi-cash-stack"></i>
                                {{ $offres->salaire_offre }}F / M
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compétence technique (requise) -->
        <div class="row">
            <div class="col-12 col-md-9">
                <h4 class="card-title fs-4 fw-bold">Compétence Technique</h4>
                <p class="m-0">
                    {{-- @foreach ($offres->competenceTechniques as $item)
                        <span
                            class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">{{ $item->nom_de_la_competence }}</span>
                    @endforeach --}}

                    @foreach (explode(',', $offres->competence_technique) as $value)
                        <span
                            class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">{{ $value }}</span>
                    @endforeach

                    {{-- <span class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">Pack
                        Office</span>
                    <span
                        class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">Illustrator</span>
                    <span class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">MS
                        Project</span>
                    <span class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">MS Visio</span> --}}
                </p>
            </div>
            <!-- <div class="col-12 col-md-3 rounded mt-4"></div> -->
        </div>

        <!-- Compétence personnelle & formation -->
        <div class="row">
            <div class="col-12 col-md-9">
                <h4 class="card-title fs-4 fw-bold">Compétences Personnelles</h4>
                <ul class="list-group" style="font-size: 12px">
                    {{-- @foreach ($offres->competencePersonnelles as $item)
                        <li class="list-group-item">
                            <i class="text-primary ri-arrow-right-circle-fill"></i>
                            Bac +2 en Communication, Marketing, ou domaine similaire
                            {{ $item->nom_de_la_competence }}
                        </li>
                    @endforeach --}}

                    @foreach (explode(',', $offres->competence_personnelle) as $value)
                        <li class="list-group-item">
                            <i class="text-primary ri-arrow-right-circle-fill"></i>
                            {{-- Bac +2 en Communication, Marketing, ou domaine similaire --}}
                            {{ $value }}
                        </li>
                    @endforeach

                    {{-- <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Bac +2 en Communication, Marketing, ou domaine similaire
                    </li>
                    <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Expérience de 1 à 2 ans dans un poste similaire (stage ou
                        première expérience professionnelle acceptée)
                    </li>
                    <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Créativité, autonomie et capacité à travailler en équipe
                    </li>
                    <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Excellent sens de l'organisation et gestion du temps
                    </li> --}}
                </ul>
            </div>
            <!-- <div class="col-12 col-md-3 rounded mt-4"></div> -->
        </div>

        <!-- Responsability du job -->
        <div class="row">
            <div class="col-12 col-md-9">
                <h4 class="card-title fs-4 fw-bold">Responsabilité du poste</h4>
                <p>
                    En tant qu'Assistant(e) Communication, vos principales
                    responsabilités incluent :
                </p>

                <ul class="list-group" style="font-size: 12px">
                    @foreach (explode(',', $offres->responsabilite_offre) as $value)
                        <li class="list-group-item">
                            <i class="text-primary ri-arrow-right-circle-fill"></i> {{ $value }}
                        </li>
                    @endforeach

                    {{-- <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Gestion des réseaux sociaux
                    </li>
                    <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Soutien à l’organisation d’événements
                    </li>
                    <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Veille médiatique et concurrentielle
                    </li>
                    <li class="list-group-item">
                        <i class="text-primary ri-arrow-right-circle-fill"></i>
                        Collaboration avec les équipes internes
                    </li> --}}
                </ul>
            </div>
            <!-- <div class="col-12 col-md-3 rounded mt-4"></div> -->
        </div>
    </div>
@endsection
