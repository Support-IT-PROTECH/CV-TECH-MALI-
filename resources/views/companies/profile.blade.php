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

                                <img src="https://aamining.net/wp-content/uploads/2022/10/logo-aamining-web.png"
                                    alt="Profile" class="rounded-circle">
                                <h2>Africa Mining Agency</h2>
                                <h3 class="text-center">Gestion des services miniers et de genie civil</h3>
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
                            background-image: url('https://aamining.net/wp-content/uploads/2022/10/pic-wapper2.png');
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
                                    {{-- Mes Informations --}}
                                    <div class="accordion-item">
                                        {{-- Title --}}
                                        <h2 class="accordion-header" id="headingInfoProfile">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseInfoProfile" aria-expanded="true"
                                                aria-controls="collapseInfoProfile">
                                                <span class="fs-6 fw-semi-bold">Mes Informations</span>
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
                                                        AA Mining avec un carnet riche de partenaires nationaux et
                                                        internationaux fiables et professionnels. Nous nous démarquons
                                                        surtout par l’expertise et l’expérience de notre équipe dans nos
                                                        secteurs d’interventions. Personnel direct, experts, consultants,
                                                        partenaires, AA Mining s’assure toujours de mettre les meilleurs au
                                                        service du meilleur pour vous.
                                                    </p>

                                                    <h5 class="card-title py-0">A propos</h5>
                                                    <p class="small fst-italic">
                                                        <strong>Notre Vision :</strong> Une structure solide formée par du
                                                        personnel possédant une vaste
                                                        expérience. Nous aspirons à être la société de référence dans
                                                        l’accompagnement des acteurs du secteur minier au MALI
                                                        <br>
                                                        <strong>Nos Valeurs :</strong> "Respect des notions santé et
                                                        sécurité au travail, et respect de
                                                        l’environnement",
                                                        "Sens de l’éthique et de la légalité",
                                                        "Excellence, Qualité, Innovation et respect strict des engagements",
                                                        "Ouverture au monde"
                                                    </p>

                                                    <h5 class="card-title">Détails du Profile</h5>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label ">Nom de l'entreprise</div>
                                                        <div class="col-lg-9 col-md-8">Africa Mining Agency</div>
                                                    </div>

                                                    {{-- <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Entreprise</div>
                                                        <div class="col-lg-9 col-md-8">Freelance</div>
                                                    </div> --}}

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Domaine</div>
                                                        <div class="col-lg-9 col-md-8">Gestion des services miniers et de
                                                            genie civil</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Secteur(s)</div>
                                                        <div class="col-lg-9 col-md-8">Mine,Energie,Consulting
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Adresse</div>
                                                        <div class="col-lg-9 col-md-8">BKO, Baco Djicoroni ACI</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Téléphone</div>
                                                        <div class="col-lg-9 col-md-8">(+223) 87-67-77-87</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                                        <div class="col-lg-9 col-md-8">info@aamining.net</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Site web</div>
                                                        <div class="col-lg-9 col-md-8">https://aamining.net/</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Statut</div>
                                                        <div class="col-lg-9 col-md-8">En recrutement</div>
                                                    </div>
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
                                                    <span class="fs-6 fw-semi-bold">Mes Informations</span>
                                                </button>
                                            </h2>
                                            <div id="collapseInfoProfileEditable" class="accordion-collapse collapse show"
                                                aria-labelledby="headingInfoProfileEditable"
                                                data-bs-parent="#accordionMyProfile">
                                                <div class="accordion-body">
                                                    <div class="information-content">
                                                        <h5 class="card-title py-0">Profile</h5>
                                                        <textarea class="form-control" rows="3" name="profileText">AA Mining avec un carnet riche de partenaires nationaux et internationaux fiables et professionnels. Nous nous démarquons surtout par l’expertise et l’expérience de notre équipe dans nos secteurs d’interventions. Personnel direct, experts, consultants, partenaires, AA Mining s’assure toujours de mettre les meilleurs au service du meilleur pour vous.
                                                        </textarea>

                                                        <h5 class="card-title py-0">A propos</h5>
                                                        <textarea class="form-control" rows="3" name="aboutText">Notre Vision : Une structure solide formée par du personnel possédant une vaste expérience. Nous aspirons à être la société de référence dans l’accompagnement des acteurs du secteur minier au MALI
                                                            
Nos Valeurs : "Respect des notions santé et sécurité au travail, et respect de l’environnement", "Sens de l’éthique et de la légalité", "Excellence, Qualité, Innovation et respect strict des engagements", "Ouverture au monde"
                                                        </textarea>

                                                        <h5 class="card-title">Détails du Profil</h5>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Identifiant</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control"
                                                                    name="fullName" value="Africa Mining Agency">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Entreprise</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="company"
                                                                    value="Freelance">
                                                            </div>
                                                        </div> --}}
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Domaine</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control"
                                                                    name="speciality"
                                                                    value="Gestion des services miniers et de genie civil">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Secteurs</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="degree"
                                                                    value="Mine,Energie,Consulting">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Adresse</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="text" class="form-control" name="address"
                                                                    value="BKO, Baco Djicoroni ACI">
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
                                                                    value="info@aamining.net">
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2">
                                                            <div class="col-lg-3 col-md-4 label">Site web</div>
                                                            <div class="col-lg-9 col-md-8">
                                                                <input type="date" class="form-control"
                                                                    name="birthDate" value="https://aamining.net/">
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
