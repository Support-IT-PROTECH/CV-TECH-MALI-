@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row gy-4 justify-content-center">
            {{-- afficher les informationss de la table profile(nom,prenom,description et experience) --}}
             {{-- @foreach ($profiles as $profile) --}}
            <div class="col-lg-4 p-2 rounded overflow-hidden"
          >
          <img src="{{asset('images/' . $profile->image) }}" alt="" style="width: 400px; height:430px;object-fit:cover">

        </div>
        <div class="col-lg-8">
            <h3 class="card-title fw-bold text-uppercase fs-2 py-0">
             {{$profile->nom}}
            </h3>
            <!-- <h2 >Mamadou Alpha Ibrahim SANGARE</h2> -->
            <p class="fst-italic py-2" style="text-align: justify">
                {{$profile->description}}
            </p>
          
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Date de naissance :</strong>
                            <span>{{$profile->date_naissance}}</span>
                        </li>
                      
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Téléphone :</strong>
                            <span>{{$profile->telephone}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Quartier :</strong> <span>{{$profile->adresse}}</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Âge :</strong>
                            <span>{{$profile->age}} ans</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Diplôme :</strong>
                            <span>{{$profile->diplome}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Email :</strong>
                            <span>{{$profile->email}}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="text-primary"><i class="bi bi-arrow-right-circle-fill"></i></span>
                            <strong>Freelance :</strong> <span>{{$profile->niveau_travail}}</span>
                        </li>
                    </ul>
                </div>
            </div>
           
                
       
                <p class="py-2" style="text-align: justify">
                  {{$profile->experience}}
                </p>
            {{-- @endforeach  --}}
            </div>
        </div>
    </div>

    <!-- Séparateur -->
    <div class="">
        <hr class="border border-primary border-3 opacity-25" />
    </div>

    <!-- formationss Expérience Compétence etc... -->
    <div class="">
        <div class="row">
            <!-- Section Profil -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header py-0">
                        <div class="card-title text-uppercase text-center fs-4 fw-bold py-1">
                            formations
                        </div>
                    </div>

                    {{-- @foreach ($formationss as $formations) --}}
                    <div class="card-body pb-0 pt-2">
                        <div class="resume-item">
                            <div class="card-title fs-5 py-0">
                                {{$formations->nom_formation}}
                            </div>
                            <h6>{{$formations->date_debut_fin_formation}}</h6>
                            <p class="card-subtitle py-1">
                                <em>{{$formations->lieu_formation}}</em>
                            </p>
                            <p class="" style="font-size: 14px">
                               {{$formations->description_formation}}
                            </p>
                        </div>                        
                    </div>
                    {{-- @endforeach --}}

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
                @foreach (explode(',',$formations->nom_competence) as $item) 
                            <div class="row">

                                <div class="col-lg-12" style="font-size: 14px">
                                    <span class="skill text-uppercase">{{$item}}</span>
                                    <!-- Start Skills Item -->
                                    {{-- @foreach (explode(',',$formations->niveau_competence) as $item)
                                        
                                    
                                    <div class="progress">
                                     <li>{{$item}}</li>
                                    </div>
                                    @endforeach --}}
                                   
                                    <!-- End Skills Item -->
                                </div>
                            </div>
                            @endforeach
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

                        {{-- @foreach ($formations as $formations) --}}
                        <div class="resume-item pb-2">
                            <div class="card-title fs-5 py-0">{{$formations->nom_experience_professionnelle}}</div>
                            <h6>{{$formations->date_debut_fin_experience_professionnelle}}</h6>
                            <p class="card-subtitle py-1"><em>{{$formations->lieu_experience_professionnelle}}</em></p>
                            
                        </div>
                        
                                @foreach (explode(',',$formations->objective_professionnelle) as $item)
                                <ul class="list-group" style="font-size: 75%;font-weight: 600;">
                                    <li class="py-1 list-group-item">
                                        <span class="text-primary">
                                            <i class="bi bi-record-circle-fill"></i>
                                        </span>
                                       {{$item}}
                                    </li>
                                </ul>

                                @endforeach
                        
                        {{-- @endforeach --}}
                        <!-- End Resume Item -->
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
