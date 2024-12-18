@extends('layouts.appUserAuth')

@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Mon compte</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="section profile">
        <div class="row">
            <div class="col-xl-12 mb-4">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-100 info-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li><a class="dropdown-item text-info" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Modifier
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                                <h2>Sangaré Mamadou</h2>
                                <h3 class="text-center">Auditeur Comptable & Financier</h3>
                                <div class="social-links mt-2">
                                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 p-2 rounded overflow-hidden"
                            style="
                            background-image: url('https://wallpapers.com/images/hd/shadowy-hoodie-guy-k9db0r05mu713f5p.jpg');
                            background-repeat: no-repeat;
                            background-size: 50%;
                            background-position: center;
                            min-height: 250px;
                            ">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow bg-secondary">
                                    <li>
                                        <a class="dropdown-item text-info" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Modifier
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contenu de mon profile --}}
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Aperçu</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                    Modifier le profil
                                </button>
                            </li>

                            {{-- <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-settings">Parametres</button>
                            </li> --}}

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Changer le mot de passe</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            {{-- Apercu du profile et photo de couverture --}}
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <div class="accordion" id="accordionMyProfile">
                                    {{-- Information sur mon profile --}}
                                    <div class="accordion-item">
                                        {{-- Title --}}
                                        <h2 class="accordion-header" id="headingInfoProfile">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseInfoProfile" aria-expanded="true"
                                                aria-controls="collapseInfoProfile">
                                                <span class="fs-6 fw-semi-bold">Information sur mon profile</span>
                                            </button>
                                        </h2>
                                        {{-- Content --}}
                                        <div id="collapseInfoProfile" class="accordion-collapse collapse show"
                                            aria-labelledby="headingInfoProfile" data-bs-parent="#accordionMyProfile"
                                            style="">
                                            <div class="accordion-body">
                                                <div class="information-content">
                                                    <h5 class="card-title py-0">Profile</h5>
                                                    <p class="small fst-italic">
                                                        Candidat passionné par la communication et le marketing digital.
                                                        Actuellement à la
                                                        recherche de nouvelles opportunités dans le secteur technologique
                                                        pour développer
                                                        mes
                                                        compétences et contribuer à des projets innovants.
                                                    </p>

                                                    <h5 class="card-title py-0">A propos</h5>
                                                    <p class="small fst-italic">
                                                        Fort d'une expérience de 4 ans dans le secteur de la communication
                                                        et du marketing
                                                        digital, je me suis spécialisé dans la gestion de projets digitaux,
                                                        la création de
                                                        contenus et l'optimisation des stratégies de visibilité en ligne. Je
                                                        suis passionné
                                                        par
                                                        la conception de stratégies de communication innovantes et l'impact
                                                        qu'elles ont sur
                                                        la
                                                        performance des entreprises.
                                                    </p>

                                                    <h5 class="card-title">Détails du Profile</h5>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label ">Nom et prénom</div>
                                                        <div class="col-lg-9 col-md-8">Sangaré Mamadou</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Entreprise</div>
                                                        <div class="col-lg-9 col-md-8">Freelance</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Spécialité</div>
                                                        <div class="col-lg-9 col-md-8">Auditeur Comptable & Financier</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Diplôme</div>
                                                        <div class="col-lg-9 col-md-8">Master en Communication Digitale
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Adresse</div>
                                                        <div class="col-lg-9 col-md-8">Yirimadio ZRNY, BKO, MALI</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Téléphone</div>
                                                        <div class="col-lg-9 col-md-8">(+223) 87-67-77-87</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                                        <div class="col-lg-9 col-md-8">s.mamadou@gmail.com</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Date de naissance</div>
                                                        <div class="col-lg-9 col-md-8">15 Mars 1992</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Statut</div>
                                                        <div class="col-lg-9 col-md-8">Célibataire</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Ma formation --}}
                                    <div class="accordion-item">
                                        {{-- Title --}}
                                        <h2 class="accordion-header" id="headingformation">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFormation"
                                                aria-expanded="false" aria-controls="collapseFormation">
                                                <span class="fs-6 fw-semi-bold">Mes formations</span>
                                            </button>
                                        </h2>

                                        {{-- Content --}}
                                        <div id="collapseFormation" class="accordion-collapse collapse"
                                            aria-labelledby="headingformation" data-bs-parent="#accordionMyProfile">
                                            <div class="accordion-body">
                                                <div class="formation-content">
                                                    <div class="resume-item">
                                                        <div class="card-title fs-5 py-0">
                                                            Master en Communication Digitale
                                                        </div>
                                                        <h6>2016 - 2018</h6>
                                                        <p class="card-subtitle py-1">
                                                            <em>Université de Paris, Paris, France</em>
                                                        </p>
                                                        <p class="" style="font-size: 14px">
                                                            Formation approfondie sur la gestion de la communication
                                                            numérique, l'analyse des données, et les stratégies de
                                                            visibilité en ligne pour les entreprises.
                                                        </p>
                                                    </div>
                                                    <!-- End Resume Item -->



                                                    <div class="resume-item">
                                                        <div class="card-title fs-5 py-0">Licence en Marketing</div>
                                                        <h6>2013 - 2016</h6>
                                                        <p class="card-subtitle py-1">
                                                            <em>Université de Lyon, Lyon, France</em>
                                                        </p>
                                                        <p class="" style="font-size: 14px">
                                                            Acquisition de compétences en stratégie marketing, gestion
                                                            de projets et optimisation des campagnes publicitaires.
                                                        </p>
                                                    </div>
                                                    <!-- End Resume Item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Mes compétences --}}
                                    <div class="accordion-item">
                                        {{-- Title --}}
                                        <h2 class="accordion-header" id="headingCompetence">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseCompetence"
                                                aria-expanded="false" aria-controls="collapseCompetence">
                                                <span class="fs-6 fw-semi-bold">Mes compétences</span>
                                            </button>
                                        </h2>

                                        {{-- Content --}}
                                        <div id="collapseCompetence" class="accordion-collapse collapse"
                                            aria-labelledby="headingCompetence" data-bs-parent="#accordionMyProfile">
                                            <div class="accordion-body">
                                                <div class="compétence-content">
                                                    <div class="col-lg-12" style="font-size: 14px">
                                                        <span class="skill">PHOTOSHOP</span>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                65%
                                                            </div>
                                                        </div>
                                                        <!-- End Skills Item -->

                                                        <span class="skill">MS PROJECT</span>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                85%
                                                            </div>
                                                        </div>
                                                        <!-- End Skills Item -->
                                                        <span class="skill">PACK OFFICE</span>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                                100%
                                                            </div>
                                                        </div>
                                                        <!-- End Skills Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Mes expériences professionnelles --}}
                                    <div class="accordion-item">
                                        {{-- Title --}}
                                        <h2 class="accordion-header" id="headingExperiencePro">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseExperiencePro"
                                                aria-expanded="false" aria-controls="collapseExperiencePro">
                                                <span class="fs-6 fw-semi-bold">Mes expériences professionnelles</span>
                                            </button>
                                        </h2>

                                        {{-- Content --}}
                                        <div id="collapseExperiencePro" class="accordion-collapse collapse"
                                            aria-labelledby="headingExperiencePro" data-bs-parent="#accordionMyProfile">
                                            <div class="accordion-body">
                                                <div class="experience-content">

                                                    <div class="resume-item pb-2">
                                                        <div class="card-title fs-5 py-0">Responsable Communication
                                                            Digitale</div>
                                                        <h6>2022 - Présent</h6>
                                                        <p class="card-subtitle py-1"><em>Tech Innovators, Paris,
                                                                France</em></p>
                                                        <ul class="list-group" style="font-size: 75%;font-weight: 600;">
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Gestion de projets digitaux, de la stratégie à
                                                                l'exécution.
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Création et optimisation des contenus pour les campagnes
                                                                de communication en ligne.
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Analyse des performances des campagnes et amélioration
                                                                des stratégies de communication.
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Coordination d'une équipe de 5 personnes dans la
                                                                réalisation de projets web.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End Resume Item -->

                                                    <div class="resume-item pb-2">
                                                        <div class="card-title fs-5 py-0">Chargé de Communication Digitale
                                                        </div>
                                                        <h6>2018 - 2022</h6>
                                                        <p class="card-subtitle py-1"><em>Web Solutions, Lyon, France</em>
                                                        </p>
                                                        <ul class="list-group" style="font-size: 75%; font-weight: 600;">
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Conception et mise en œuvre de stratégies de marketing
                                                                digital pour divers clients.
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Réalisation de présentations clients et propositions de
                                                                stratégies numériques sur mesure.
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Suivi des campagnes en ligne et gestion des budgets de
                                                                projets digitaux allant jusqu'à 50 000€.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End Resume Item -->

                                                    <div class="resume-item pb-2">
                                                        <div class="card-title fs-5 py-0">Assistant Communication</div>
                                                        <h6>2016 - 2018</h6>
                                                        <p class="card-subtitle py-1"><em>Marketing Agency, Paris,
                                                                France</em></p>
                                                        <ul class="list-group" style="font-size: 75%; font-weight: 600;">
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Rédaction de contenu pour des supports web et print
                                                                (articles, blogs, newsletters).
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Gestion des réseaux sociaux pour accroître la visibilité
                                                                des clients.
                                                            </li>
                                                            <li class="py-1 list-group-item">
                                                                <span class="text-primary">
                                                                    <i class="bi bi-record-circle-fill"></i>
                                                                </span>
                                                                Analyse des performances sur les plateformes numériques
                                                                et préparation de rapports mensuels.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End Resume Item -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Tab Modification du profile --}}
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <form id="updateProfileForm" method="POST">
                                    @csrf <!-- Génère un token CSRF pour sécuriser la requête -->

                                    <div class="accordion" id="accordionMyProfile">

                                        {{-- Information sur le profil --}}
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingInfoProfileEditable">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseInfoProfileEditable" aria-expanded="true"
                                                    aria-controls="collapseInfoProfileEditable">
                                                    <span class="fs-6 fw-semi-bold">Information sur mon profil</span>
                                                </button>
                                            </h2>
                                            <div id="collapseInfoProfileEditable" class="accordion-collapse collapse show"
                                                aria-labelledby="headingInfoProfileEditable"
                                                data-bs-parent="#accordionMyProfile">
                                                <div class="accordion-body">
                                                    <div class="information-content">
                                                        <h5 class="card-title py-0">Profile</h5>
                                                        <textarea class="form-control" rows="3" name="profileText">Candidat passionné par la communication et le marketing digital. Actuellement à la recherche de nouvelles opportunités dans le secteur technologique pour développer mes compétences et contribuer à des projets innovants.</textarea>

                                                        <h5 class="card-title py-0">A propos</h5>
                                                        <textarea class="form-control" rows="3" name="aboutText">Fort d'une expérience de 4 ans dans le secteur de la communication et du marketing digital, je me suis spécialisé dans la gestion de projets digitaux, la création de contenus et l'optimisation des stratégies de visibilité en ligne. Je suis passionné par la conception de stratégies de communication innovantes et l'impact qu'elles ont sur la performance des entreprises.</textarea>

                                                        <h5 class="card-title">Détails du Profil</h5>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Nom et prénom</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control"
                                                                    name="fullName" value="Sangaré Mamadou">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Entreprise</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="company"
                                                                    value="Freelance">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Spécialité</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control"
                                                                    name="speciality"
                                                                    value="Auditeur Comptable & Financier">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Diplôme</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="degree"
                                                                    value="Master en Communication Digitale">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Adresse</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="address"
                                                                    value="Yirimadio ZRNY, BKO, MALI">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Téléphone</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="phone"
                                                                    value="(+223) 87-67-77-87">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="email" class="form-control" name="email"
                                                                    value="s.mamadou@gmail.com">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Date de naissance</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="date" class="form-control"
                                                                    name="birthDate" value="1992-03-15">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Statut</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="status"
                                                                    value="Célibataire">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Mes formations --}}
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFormationEditable">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFormationEditable"
                                                    aria-expanded="false" aria-controls="collapseFormationEditable">
                                                    <span class="fs-6 fw-semi-bold">Mes formations</span>
                                                </button>
                                            </h2>
                                            <div id="collapseFormationEditable" class="accordion-collapse collapse"
                                                aria-labelledby="headingFormationEditable"
                                                data-bs-parent="#accordionMyProfile">
                                                <div class="accordion-body">
                                                    <div class="formation-content">
                                                        <div class="resume-item">
                                                            <div class="card-title fs-5 py-0">
                                                                <input type="text" class="form-control"
                                                                    name="formation1"
                                                                    value="Master en Communication Digitale">
                                                            </div>
                                                            <h6>
                                                                <input type="text" class="form-control"
                                                                    name="yearFormation1" value="2016 - 2018">
                                                            </h6>
                                                            <p class="card-subtitle py-1">
                                                                <em><input type="text" class="form-control"
                                                                        name="university1"
                                                                        value="Université de Paris, Paris, France"></em>
                                                            </p>
                                                            <p>
                                                                <textarea class="form-control" rows="2" name="descriptionFormation1">Formation approfondie sur la gestion de la communication numérique, l'analyse des données, et les stratégies de visibilité en ligne pour les entreprises.</textarea>
                                                            </p>
                                                        </div>

                                                        <div class="resume-item">
                                                            <div class="card-title fs-5 py-0">
                                                                <input type="text" class="form-control"
                                                                    name="formation2" value="Licence en Marketing">
                                                            </div>
                                                            <h6>
                                                                <input type="text" class="form-control"
                                                                    name="yearFormation2" value="2013 - 2016">
                                                            </h6>
                                                            <p class="card-subtitle py-1">
                                                                <em><input type="text" class="form-control"
                                                                        name="university2"
                                                                        value="Université de Lyon, Lyon, France"></em>
                                                            </p>
                                                            <p>
                                                                <textarea class="form-control" rows="2" name="descriptionFormation2">Acquisition de compétences en stratégie marketing, gestion de projets et optimisation des campagnes publicitaires.</textarea>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Mes compétences --}}
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingCompetenceEditable">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseCompetenceEditable"
                                                    aria-expanded="false" aria-controls="collapseCompetenceEditable">
                                                    <span class="fs-6 fw-semi-bold">Mes compétences</span>
                                                </button>
                                            </h2>
                                            <div id="collapseCompetenceEditable" class="accordion-collapse collapse"
                                                aria-labelledby="headingCompetenceEditable"
                                                data-bs-parent="#accordionMyProfile">
                                                <div class="accordion-body">
                                                    <div class="compétence-content">
                                                        <div class="col-lg-12" style="font-size: 14px">
                                                            <div class="row" id="competenceContainer">
                                                                <div class="col-lg-6">
                                                                    <label for="competence1">Compétence 1 :</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                        id="competenceName1" name="competenceName1"
                                                                        value="PHOTOSHOP">
                                                                    <label for="competence1">Niveau :</label>
                                                                    <input type="range" class="form-range"
                                                                        id="competence1" name="competence1"
                                                                        min="0" max="100" value="65">
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label for="competence2">Compétence 2 :</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                        id="competenceName2" name="competenceName2"
                                                                        value="MS PROJECT">
                                                                    <label for="competence2">Niveau :</label>
                                                                    <input type="range" class="form-range"
                                                                        id="competence2" name="competence2"
                                                                        min="0" max="100" value="85">
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <label for="competence3">Compétence 3 :</label>
                                                                    <input type="text" class="form-control mb-2"
                                                                        id="competenceName3" name="competenceName3"
                                                                        value="PACK OFFICE">
                                                                    <label for="competence3">Niveau :</label>
                                                                    <input type="range" class="form-range"
                                                                        id="competence3" name="competence3"
                                                                        min="0" max="100" value="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Mes expériences professionnelles --}}
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingExperienceEditable">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseExperienceEditable"
                                                    aria-expanded="false" aria-controls="collapseExperienceEditable">
                                                    <span class="fs-6 fw-semi-bold">Mes expériences professionnelles</span>
                                                </button>
                                            </h2>
                                            <div id="collapseExperienceEditable" class="accordion-collapse collapse"
                                                aria-labelledby="headingExperienceEditable"
                                                data-bs-parent="#accordionMyProfile">
                                                <div class="accordion-body">
                                                    <div class="experience-content">
                                                        <div class="resume-item">
                                                            <div class="card-title fs-5 py-0">
                                                                <input type="text" class="form-control"
                                                                    name="jobTitle1" value="Chef de Projet Digital">
                                                            </div>
                                                            <h6>
                                                                <input type="text" class="form-control"
                                                                    name="yearExperience1" value="2018 - 2023">
                                                            </h6>
                                                            <p class="card-subtitle py-1">
                                                                <em><input type="text" class="form-control"
                                                                        name="companyExperience1"
                                                                        value="Agence Digitale WebMaster, Paris"></em>
                                                            </p>
                                                            <p>
                                                                <textarea class="form-control" rows="2" name="descriptionExperience1">Gestion de projets digitaux, élaboration de stratégies marketing, optimisation des conversions en ligne.</textarea>
                                                            </p>
                                                        </div>

                                                        <div class="resume-item">
                                                            <div class="card-title fs-5 py-0">
                                                                <input type="text" class="form-control"
                                                                    name="jobTitle2"
                                                                    value="Consultant en stratégie digitale">
                                                            </div>
                                                            <h6>
                                                                <input type="text" class="form-control"
                                                                    name="yearExperience2" value="2016 - 2018">
                                                            </h6>
                                                            <p class="card-subtitle py-1">
                                                                <em><input type="text" class="form-control"
                                                                        name="companyExperience2" value="Freelance"></em>
                                                            </p>
                                                            <p>
                                                                <textarea class="form-control" rows="2" name="descriptionExperience2">Conseil stratégique pour des clients dans le secteur des technologies et de la communication digitale.</textarea>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Bouton Mettre à jour -->
                                    <div class="d-flex justify-content-center my-3">
                                        <button type="button" class="btn btn-primary" id="updateButton">
                                            Mettre à jour
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Change Password -->
                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">
                                            Mot de passe actuel
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control"
                                                id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">
                                            nouveau mot de passe
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control"
                                                id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">
                                            Ressaisissez le nouveau mot de passe
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" disabled>Changer
                                            maintenant</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
