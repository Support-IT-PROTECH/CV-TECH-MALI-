@include('includes/head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <!-- ======= Header ======= -->
    <header id="header"
        class="header container fixed-top d-flex align-items-center justify-content-between shadow bg-light">
        <div class="w-100 text-start d-flex align-items-center">
            <a href="{{ route('/') }}" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-lg-block">CV TECH MALI</span>
            </a>
        </div>
        <!-- End Logo -->

        <!--Trigger OffCanva du menu de navigation -->
        <div class="menu-content w-100 justify-content-center text-center">
            <button class="btn btn-outline-warning" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <i class="bi bi-list"></i>
                Menu
            </button>
        </div>
        <!-- End Menu de navigation-->
        <div class="nav-contesnt w-100 d-flex align-items-center justify-content-end">
            <nav class="header-nav">
                <ul class="d-flex align-items-center">
                    <li>
                        <!-- Vertically centered Modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalConnexion">
                            Se connecter
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    {{-- Section Modal & OffCanva --}}
    <section class="">
        <!-- {{-- Modal pour Se connecter  --}} -->
        <div class="modal fade" id="modalConnexion" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center text-uppercase w-100" id="modalCenterTitle">
                            Connectez vous pour commencer
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="nav-align-top">

                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-justified-home" aria-controls="navs-justified-home"
                                        aria-selected="false">
                                        <i class="tf-icons bx bx-home"></i> Connexion
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile"
                                        aria-selected="true">
                                        <i class="tf-icons bx bx-user"></i> Inscription
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content mt-3">
                                <div class="tab-pane active fade show" id="navs-justified-home" role="tabpanel">

                                    <form id="connexionForm" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="">

                                            <div class="form-floating mb-3">
                                                <input type="mail" class="form-control" id="mailAdresse" required
                                                    name="email" placeholder="mon@site.com">
                                                <label for="mailAdresse">Adresse mail</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="password"
                                                    name="password" required placeholder="******">
                                                <label for="password">Mot de passe</label>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="invalid-feedback d-flex mb-4" id="feedback-connexion"></div>

                                        <div class="">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">
                                                Fermer
                                            </button>
                                            <input type="submit" class="btn btn-primary" value="Se connecter">
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">

                                    <form id="registerForm">
                                        <div class="">
                                            <div class="form-floating mb-3">
                                                <input type="mail" class="form-control" id="identifiant"
                                                    placeholder="Issiaka Alpha Guindo" autofocus>
                                                <label for="identifiant">Nom & Prénom</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="mail" class="form-control" id="specialite"
                                                    placeholder="Gestion d'entreprise">
                                                <label for="specialite">Spécialité</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="mail" class="form-control" id="mailAdresse"
                                                    placeholder="mon@site.com">
                                                <label for="mailAdresse">Adresse mail</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tel"
                                                    placeholder="+223 87 78 76 65">
                                                <label for="tel">Numéro téléphone</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="******">
                                                <label for="password">Mot de passe</label>
                                            </div>

                                        </div>
                                        <div class="">
                                            <button type="button" class="btn btn-outline-danger"
                                                data-bs-dismiss="modal">
                                                Fermer
                                            </button>
                                            <input type="submit" class="btn btn-primary" value="S'inscrire">
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- {{-- END Modal pour mon compte --}} -->

        <!--Content OffCanva du menu de navigation -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title card-title pt-2 pb-2 fw-bold text-uppercase" id="offcanvasMenuLabel"
                    style="font-size: 100%">
                    <i class="bi bi-list"></i>
                    Menu de navigation
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="list-group list-group-flush card-title fs-6" style="text-transform: uppercase">
                    <li class="list-group-item">
                        <span class="text-primary"><i class="bi bi-house-door-fill me-2"></i></span>
                        <a href="{{ route('/')}}">Accueil</a>
                    </li>
                    <li class="list-group-item">
                        <span class="text-primary"><i class="bi bi-gift-fill me-2"></i></span>
                        <a href="{{ route('jobs-list')}}">Offres</a>
                    </li>
                    <li class="list-group-item">
                        <span class="text-primary"><i class="bi bi-buildings-fill me-2"></i></span>
                        <a href="#">Entreprises</a>
                    </li>
                    <li class="list-group-item">
                        <span class="text-primary"><i class="bi bi-info-circle-fill me-2"></i></span>
                        <a href="#">A propos</a>
                    </li>
                    <li class="list-group-item">
                        <span class="text-primary"><i class="bi bi-person-vcard-fill me-2"></i></span>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    {{-- =END Modal Connexion= --}}

    <main id="main" class="main container">


        <section class="section ">
            <div class="row">
                @yield('content')
            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('includes/foot')
    <!-- End Footer -->


    {{-- ========== Les scripts ======== --}}
    @include('includes/scripts')
    {{-- ======== END Les scripts ====== --}}

</body>

</html>
