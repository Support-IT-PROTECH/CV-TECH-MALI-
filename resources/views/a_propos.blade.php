@extends('layouts.appGuest')

@section('content')
    <!-- En-tête -->
    <div class="header-section"
        style="margin-top: -10vh; background: url('assets/img/backgrounds/fond-3.jpg') no-repeat top center; background-size: cover; height: 50vh; color: white;">
        <div class="container h-100 d-flex flex-column justify-content-center">
            <h1 class="text-center display-3 fw-bold">Bienvenue sur CV Tech Mali</h1>
            <p class="text-center fs-4">La plateforme pour transformer votre CV en un véritable atout professionnel !</p>
        </div>
    </div>

    <!-- Présentation de l'entreprise -->
    <div class="about-us-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Colonne 1: Texte de présentation -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3 card-title fs-2">Qui sommes-nous ?</h2>
                    <p class="lead">CV Tech Mali est une plateforme innovante dédiée à l’optimisation de la gestion de
                        carrière en ligne. Nous mettons à disposition des outils pour créer, gérer et partager des CV en
                        ligne, faciliter la recherche d'emplois et aider les entreprises à trouver les meilleurs talents.
                    </p>
                    <p class="shadow p-2 border-start border-4 border-success-subtle rounded fst-italic">
                        Notre mission est de simplifier le processus de recrutement et de permettre à chaque individu de se
                        démarquer dans le monde professionnel grâce à un CV unique et dynamique.
                    </p>
                </div>

                <!-- Colonne 2: Image de présentation -->
                <div class="col-md-6">
                    <img src="assets/img/backgrounds/fond-1.jpg" alt="Notre entreprise" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>

    <!-- Nos Valeurs -->
    <div class="values-section py-5 bg-light">
        <div class="container">
            <h2 class="card-title fs-2 text-center fw-bold mb-5 text-uppercase">Nos Valeurs</h2>
            <div class="row g-2 g-lg-3 mb-4">
                <!-- Valeur 1 -->
                <div class="col-md-4 text-center">
                    <div class="card h-100 icon-box mx-2 border-bottom border-5 border-primary-subtle rounded">
                        <i class="bi bi-heart-fill fs-1 text-primary mb-3"></i>
                        <h4 class="fw-semibold">Engagement</h4>
                        <p>Nous nous engageons à offrir une plateforme fiable et performante pour aider chacun à réussir
                            dans sa carrière professionnelle.</p>
                    </div>
                </div>
                <!-- Valeur 2 -->
                <div class="col-md-4 text-center">
                    <div class="card h-100 icon-box mx-2 border-bottom border-5 border-primary-subtle rounded">
                        <i class="bi bi-lightbulb-fill fs-1 text-primary mb-3"></i>
                        <h4 class="fw-semibold">Innovation</h4>
                        <p>Nous plaçons l'innovation au cœur de notre mission pour proposer des solutions modernes et
                            efficaces adaptées aux besoins du marché. lorem</p>
                    </div>
                </div>
                <!-- Valeur 3 -->
                <div class="col-md-4 text-center">
                    <div class="card h-100 icon-box mx-2 border-bottom border-5 border-primary-subtle rounded">
                        <i class="bi bi-hand-thumbs-up-fill fs-1 text-primary mb-3"></i>
                        <h4 class="fw-semibold">Excellence</h4>
                        <p>Nous visons l'excellence dans tout ce que nous faisons, en garantissant des services de haute
                            qualité à nos utilisateurs et partenaires.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nos Services -->
    <div class="services-section py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 card-title fs-2 text-uppercase">Nos Services</h2>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="assets/img/elements/1.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Création de CV en ligne</h5>
                            <p class="card-text">Nous offrons des outils performants pour créer un CV en ligne attractif et
                                professionnel, adapté aux exigences du marché.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="assets/img/elements/3.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Recherche d'emplois</h5>
                            <p class="card-text">Notre plateforme vous permet de rechercher et postuler à des offres
                                d'emploi adaptées à votre profil et vos compétences.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="assets/img/elements/5.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Recrutement d'entreprises</h5>
                            <p class="card-text">Les entreprises peuvent publier des offres et rechercher des talents
                                qualifiés grâce à notre service de recrutement personnalisé.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notre Vision -->
    <div class="vision-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!-- Colonne 1: Texte de présentation -->
                <div class="col-md-8">
                    <h2 class="fw-bold mb-4 card-title text-uppercase fs-2">Notre Vision</h2>
                    <p class="lead">Être la référence en matière de gestion de carrière en ligne en Afrique, en offrant
                        une
                        plateforme intuitive et innovante qui connecte les talents aux meilleures opportunités
                        professionnelles.</p>
                </div>

                <!-- Colonne 2: Image de présentation -->
                <div class="col-md-4">
                    <img src="assets/img/backgrounds/fond-1.jpg" alt="Vision" class="img-fluid rounded mt-4">
                </div>
            </div>
        </div>




    </div>

    <!-- Notre Équipe -->
    <div class="team-section py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 card-title text-uppercase fs-2">Notre Équipe</h2>
            <div class="row g-4">
                <!-- Membre 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm text-center h-100">
                        <img src="assets/img/profile-img.jpg" class="card-img-top rounded-circle w-50 mx-auto mt-3"
                            alt="Membre 1">
                        <div class="card-body mb-0">
                            <h5 class="card-title fw-bold">Amadou Traoré</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">CEO & Fondateur</h6>
                            <p class="card-text">Amadou est le fondateur et directeur général de CV Tech Mali, guidant
                                l'entreprise vers son objectif de faciliter la gestion des carrières professionnelles en
                                ligne.</p>
                            <a href="https://www.linkedin.com/in/amadou-traore" class="btn btn-outline-primary"
                                target="_blank">Voir le profil</a>
                        </div>
                    </div>
                </div>
                <!-- Membre 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm text-center h-100">
                        <img src="assets/img/profile-img.jpg" class="card-img-top rounded-circle w-50 mx-auto mt-3"
                            alt="Membre 2">
                        <div class="card-body mb-0">
                            <h5 class="card-title fw-bold">Sory Keita</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Responsable Marketing</h6>
                            <p class="card-text">Sory est en charge de la stratégie marketing de CV Tech Mali, travaillant
                                à
                                accroître la visibilité de la plateforme et à développer de nouvelles opportunités
                                commerciales.</p>
                            <a href="https://www.linkedin.com/in/sory-keita" class="btn btn-outline-primary"
                                target="_blank">Voir le profil</a>
                        </div>
                    </div>
                </div>
                <!-- Membre 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm text-center h-100">
                        <img src="assets/img/profile-img.jpg" class="card-img-top rounded-circle w-50 mx-auto mt-3"
                            alt="Membre 3">
                        <div class="card-body mb-0">
                            <h5 class="card-title fw-bold">Fatoumata Diallo</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Développeuse Web</h6>
                            <p class="card-text">Fatoumata est responsable du développement technique de la plateforme,
                                garantissant que le site soit performant, sécurisé et accessible.</p>
                            <a href="https://www.linkedin.com/in/fatoumata-diallo" class="btn btn-outline-primary"
                                target="_blank">Voir le profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nos Partenaires -->
    <div class="partners-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 card-title text-uppercase fs-2">Nos Partenaires</h2>
            <div class="row g-4">

                <!-- Partenaire 1 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center">
                        <img src="assets/img/product-1.jpg" class="card-img-top p-3" alt="Partenaire 1">
                    </div>
                </div>
                <!-- Partenaire 2 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center">
                        <img src="assets/img/product-2.jpg" class="card-img-top p-3" alt="Partenaire 2">
                    </div>
                </div>
                <!-- Partenaire 3 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center">
                        <img src="assets/img/product-3.jpg" class="card-img-top p-3" alt="Partenaire 3">
                    </div>
                </div>
                <!-- Partenaire 4 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center">
                        <img src="assets/img/product-4.jpg" class="card-img-top p-3" alt="Partenaire 4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="contact-section py-5" id="contact">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 card-title text-uppercase fs-2">Contactez-nous</h2>
            <p class="text-center mb-4">Si vous avez des questions, n'hésitez pas à nous envoyer un message ou à nous
                appeler. Nous sommes là pour vous aider !</p>

            <div class="row">
                <!-- Formulaire de Contact -->
                <div class="col-md-6">
                    <form class="card p-2">
                        <div class="card-header py-0">
                            <div class="card-title text-center text-uppercase">Formulaire de contact</div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Votre message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>

                <!-- Informations de Contact -->
                <div class="col-md-6">
                    <h5>Nos Coordonnées</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> 123 Rue de l'Innovation, Bamako, Mali</li>
                        <li><i class="bi bi-telephone-fill"></i> +223 20 30 40 50</li>
                        <li><i class="bi bi-envelope-fill"></i> contact@cvtechmali.com</li>
                    </ul>

                    <h5>Suivez-nous</h5>
                    <div class="social-links">
                        <a href="#" class="btn btn-outline-primary"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-info"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-danger"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Suivez-nous -->
    <div class="follow-us-section py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3 card-title text-uppercase fs-2">Suivez-nous</h2>
            <p>Restez connectés avec nous sur les réseaux sociaux pour être informés des dernières nouvelles.</p>

            <div class="social-icons">
                <a href="#" class="btn btn-outline-primary btn-lg m-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="btn btn-outline-info btn-lg m-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="btn btn-outline-dark btn-lg m-2"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="btn btn-outline-danger btn-lg m-2"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
@endsection
