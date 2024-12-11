@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row gy-4 justify-content-center">
            {{-- afficher les informations de la table profile(nom,prenom,description et experience) --}}
            @foreach ($profiles as $profile)
            <div class="col-lg-4 p-2 rounded overflow-hidden"
          >
          <img src="images/{{$profile->image}}" alt="" style="width: 400px; height:430px;object-fit:cover">

        </div>
        <div class="col-lg-8">
            <h3 class="card-title fw-bold text-uppercase fs-2 py-0">
              {{$profile->prenom}} {{$profile->nom}}
            </h3>
            <!-- <h2 >Mamadou Alpha Ibrahim SANGARE</h2> -->
            <p class="fst-italic py-2" style="text-align: justify">
                {{$profile->description}}
            </p>
            @endforeach

            @foreach ($credentials as $credential)
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Date de naissance :</strong>
                            <span>{{$credential->date_naissance}}</span>
                        </li>
                      
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Téléphone :</strong>
                            <span>{{$credential->telephone}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Quartier :</strong> <span>{{$credential->adresse}}</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Âge :</strong>
                            <span>{{$credential->age}} ans</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Diplôme :</strong>
                            <span>{{$credential->Diplome}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Email :</strong>
                            <span>{{$credential->email}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Freelance :</strong> <span>{{$credential->niveau_travail}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
                
                @foreach ($profiles as $profile)
                <p class="py-2" style="text-align: justify">
                  {{ $profile->experience}}
                </p>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Séparateur -->
    <div class="">
        <hr class="border border-primary border-3 opacity-25" />
    </div>

    <!-- Formation Expérience Compétence etc... -->
    <div class="">
        <div class="row">
            <!-- Section Profil -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header py-0">
                        <div class="card-title text-uppercase text-center fs-4 fw-bold py-1">
                            Formation
                        </div>
                    </div>

                    @foreach ($formations as $formation)
                    <div class="card-body pb-0 pt-2">
                        <div class="resume-item">
                            <div class="card-title fs-5 py-0">
                                {{$formation->nom}}
                            </div>
                            <h6>{{ $formation->duree}}</h6>
                            <p class="card-subtitle py-1">
                                <em>{{$formation->lieu}}</em>
                            </p>
                            <p class="" style="font-size: 14px">
                               {{$formation->description}}
                            </p>
                        </div>                        
                    </div>
                    @endforeach
                    <!-- End Resume Item -->
                    
                </div>

                <div class="card">
                    <div class="card-header py-0">
                        <div class="card-title text-uppercase text-center fs-4 fw-bold py-0">
                            Compétences techniques
                        </div>
                    </div>
                    <!-- End Section Title -->

                    <div class="card-body">
                        <div class="container py-1">
                            <div class="row">
                                <div class="col-lg-12" style="font-size: 14px">
                                    <span class="skill">PHOTOSHOP</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                            aria-valuemin="0" aria-valuemax="100">
                                            65%
                                        </div>
                                    </div>
                                    <!-- End Skills Item -->

                                    <span class="skill">MS PROJECT</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100">
                                            85%
                                        </div>
                                    </div>
                                    <!-- End Skills Item -->
                                    <span class="skill">PACK OFFICE</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100">
                                            100%
                                        </div>
                                    </div>
                                    <!-- End Skills Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Expérience Professionnelle -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-header py-0">
                        <div class="card-title text-uppercase text-center fs-4 fw-bold py-1">Expérience Professionnelle
                        </div>
                    </div>

                    <div class="card-body pb-2 pt-2">

                        @foreach ($experiences as $experience)
                        <div class="resume-item pb-2">
                            <div class="card-title fs-5 py-0">{{$experience->nom}}</div>
                            <h6>{{$experience->duree}}</h6>
                            <p class="card-subtitle py-1"><em>{{$experience->lieu}}</em></p>
                            
                        </div>
                        
                        @foreach ($missions as $mission)
                        <ul class="list-group" style="font-size: 75%;font-weight: 600;">
                            <li class="py-1 list-group-item">
                                <span class="text-primary">
                                    <i class="bi bi-record-circle-fill"></i>
                                </span>
                                {{$mission->list_objectif}}
                            </li>

                        </ul>
                        @endforeach
                        
                        @endforeach
                        <!-- End Resume Item -->

                        
                        <!-- End Resume Item -->

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
