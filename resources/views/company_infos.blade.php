@extends('layouts.appGuest')

@section('content')
    <!-- job Details Section -->

    <!-- job Details Section -->

    <!-- Détails qui seront positionnés au-dessus de la carte -->
    <div class="card p-3 position-relative" id="first-card"
        style="
            min-height: 40vh;
            margin-top: -15vh;
            background-image: url('{{asset('assets/img/backgrounds/fond-3.jpg')}}');
            background-size: cover;
          ">
        <div class="position-absolute top-100 start-50 translate-middle w-75 container p-2 card shadow" id="second-card">
           {{-- @foreach ($entreprises as $entreprise) --}}
               
           
             <div class="row d-flex align-items-center justify-content-center">
                <div class="col-2">
                  
                  <img class="w-75 p-1 border rounded" src="{{asset('images/' . $entreprise->image) }}" alt="image_entreprise" />
                     
                </div>
                <div class="col position-relative">
                    <h5 class="card-title pt-0 pb-2 fw-bold" style="font-size: 100%">
                        {{$entreprise->nom}}
                    </h5>
                    <h6 class="card-subtitle fw-bold mb-2 text-body-secondary">
                        <i class="bi bi-buildings-fill"></i>
                        {{$entreprise->domaine}}
                    
                    </h6>
                </div>
            </div>

            <div class="">
                <hr class="w-100 border border-primary border-1 opacity-25 m-1" />
            </div>
            <div class="description p-1" style="font-size: 14px; text-align: justify" id="description">
                {{$entreprise->description}}
              </div>
              <div class="row mt-3 mb-3">
                  <div class="col text-center">
                      <button type="button" class="btn btn-outline-primary btn-block">
                          Postuler maintenant
                      </button>
                  </div>
              </div>
        </div>
    </div>

    <div class="company-details-content" id="job-details-content">
        <!-- A propos de ce role -->
        <div class="row " style="margin-block-start: 8rem;">
            <div class="col-12 col-md-9">
                <h4 class="card-title fs-4 fw-bold">A propos de nous</h4>
                <p>
                <h6 class="card-subtitle fw-bold mb-2 text-body-secondary">
                    Notre Vision
                </h6>
                    {{$entreprise->vision}}
                </p>
                {{-- @endforeach --}}
                <!-- Valeur -->
                <ul class="list-group" style="font-size: 12px">
                    <h6 class="card-subtitle fw-bold mb-2 text-body-secondary">
                        Nos Valeurs
                    </h6>
                
                @foreach (explode(',',$entreprise->nom_valeur) as $item) 
                    {{-- <p>{{$item}}</p> --}}
                    <li class="list-group-item">
                        <i class="text-primary ri-checkbox-circle-fill"> {{$item}}</i>
                    </li>
                @endforeach
                       
                </ul>
                    
            </div>
            <div class="col-12 col-md-3 shadow rounded mt-4">
                <div class="pt-2 pb-2">
                    <div class="row row-cols-1 row-cols-md-1 row-cols-sm-2 g-2" style="font-size: 13px; font-weight: 600">
                     
                     {{-- @foreach ($entreprises as $entreprise) --}}
                     <div class="col">
                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                            <i class="me-2 bi bi-geo-alt"></i>
                           {{ $entreprise->adresse}}
                        </h6>
                    </div>
                    <div class="col">
                        <h6 class="card-title m-0 p-1" style="font-size: 100%">
                            <i class="me-2 ri-mail-line"></i>
                            {{ $entreprise->email}}
                        </h6>
                        <div class="col">
                            <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                <i class="me-2 ri-phone-line"></i>
                                {{ $entreprise->telephone}}
                            </h6>
                        </div>
                        <div class="col">
                            <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                <i class="me-2 ri-global-line"></i>
                                {{ $entreprise->site_web}}
                            </h6>
                        </div>

                    </div>
                     {{-- @endforeach --}}

                </div>
            </div>
        </div>

        <!-- Secteur d'activité -->
        <div class="row">
            <div class="col-12 col-md-9">
                <h4 class="card-title fs-4 fw-bold">Secteur d'activité</h4>

                <p class="m-0">
                    @foreach (explode(',',$entreprise->nom_secteur_activite) as $item) 

                    <span class="btn btn-outline-primary mx-2 my-2 px-3 py-2 text-uppercase d-inline-block">{{$item}}</span> 
                
                    @endforeach

                </p>
            </div>
            <!-- <div class="col-12 col-md-3 rounded mt-4"></div> -->
        </div>

    </div>
    <?php $num = 6; ?>
    <h4 class="card-title fs-4 fw-bold">Nos offres actuellement en cours
        <span class="badge text-bg-warning fw-bold">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
    </h4>

    <!-- Job list -->
    <div class="row justify-content-center">

        <div class="col-md-12 jobs-container pt-0">
            <!-- job card -->

            <table class="w-100 mb-3 datatable" id="tableOffre">

                @for ($i = 0; $i < $num; $i++)
                    <tr class="card p-2 w-100 shadow mt-2 mb-0">
                        <td class="">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-2">
                                    <img src="{{asset('assets/img/news-2.jpg')}}" alt="" class="card-img" />
                                </div>

                                <div class="col-8">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title pt-0 pb-2 fw-bold" style="font-size: 100%">
                                            Communication
                                        </h5>

                                        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 g-2"
                                            style="font-size: 13px; font-weight: 600">
                                            <div class="col">
                                                <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                    <i class="me-2 bi bi-geo-alt"></i>
                                                    BKO, ACI 2000
                                                </h6>
                                            </div>

                                            <div class="col">
                                                <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                    <i class="me-2 bi bi-briefcase"></i> Temps Plein
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
                                                    40 H(s) / S
                                                </h6>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title m-0 p-1" style="font-size: 100%">
                                                    <i class="me-2 bi bi-cash-stack"></i>
                                                    250.000F / M
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="d-flex align-items-end flex-column">
                                        <div class="mb-auto p-2">
                                            <a href="{{ route('job-infos') }}" class="btn btn-outline-primary p-1"
                                                style="font-size: 12px">
                                                Plus d'info
                                                <i class="bi bi-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="p-2">
                                            <h6 class="fw-bold card-title text-warning m-0 p-1" style="font-size: 11px">
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
@endsection
