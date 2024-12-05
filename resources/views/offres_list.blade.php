@extends('layouts.appGuest')

@section('content')
    <!-- Chercher un job précis -->
    <div class="card shadow p-3 mb-0">
        <div class="container text-center">
            <form>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col">
                        <input type="text" name="jobSearchTitle" class="form-control" placeholder="Nom du job" />
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="">Localisation</option>
                            <option value="1">BAMAKO</option>
                            <option value="2">KATI</option>
                            <option value="3">SIKASSO</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected="">Type de JOB</option>
                            <option value="1">Freelance</option>
                            <option value="1">Temps Plein</option>
                            <option value="1">Temps Partiel</option>
                            <option value="1">Stagiaire</option>
                            <option value="1">Stagiaire</option>
                            <option value="1">Temporaire</option>
                        </select>
                    </div>
                    <div class="col">
                        <input class="btn btn-outline-info w-100" type="submit" value="Trouver maintenant" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="">
        <div class="row mt-2">
            <!-- filter section -->
            <div class="col-md-3 pt-2">
                <!-- les catégories de job disponible -->
                <div class="card mb-3">
                    <div class="card-header pt-0 mb-0 text-center">Catégories de Jobs</div>
                    <div class="card-body pt-2">
                        <div class="card-items fw-bold" style="font-size: 12px;">

                            <div class="row">
                                <div class="col-auto me-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="dev-web" checked="">
                                        <label class="form-check-label" for="dev-web">Développeur Web</label>
                                    </div>
                                </div>
                                <div class="col-auto"><span class="badge bg-warning text-primary">4</span></div>
                            </div>
                        </div>

                        <div class="card-items fw-bold" style="font-size: 12px;">

                            <div class="row">
                                <div class="col-auto me-auto">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="marketing" checked="">
                                        <label class="form-check-label" for="marketing">Marketing</label>
                                    </div>
                                </div>
                                <div class="col-auto"><span class="badge bg-warning text-primary">9</span></div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- les Localisation de job disponible -->
                <div class="card mb-3">
                    <div class="card-header pt-0 mb-0 text-center">Emplacement</div>
                    <div class="card-body border pt-2">
                        <div class="row card-items fw-bold" style="font-size: 12px;">

                            <div class="col-auto me-auto">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="dev-web" checked="">
                                    <label class="form-check-label" for="dev-web">BAMAKO</label>
                                </div>
                            </div>
                            <div class="col-auto"><span class="badge bg-warning text-primary">4</span></div>
                        </div>

                        <div class="row card-items fw-bold" style="font-size: 12px;">

                            <div class="col-auto me-auto">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="marketing" checked="">
                                    <label class="form-check-label" for="marketing">SIKASSO</label>
                                </div>
                            </div>
                            <div class="col-auto"><span class="badge bg-warning text-primary">9</span></div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Job list -->
            <div class="col-md-9 jobs-container pt-0">
                <!-- job card -->

                <table class="w-100 mb-3 datatable" id="tableOffre">

                    @for ($i = 0; $i < 20; $i++)
                        <tr class="card p-2 w-100 shadow mt-2 mb-0">
                            <td class="">
                                <div class="row">
                                    <div class="col-2 h-100">
                                        <img src="{{ asset('assets/img/news-2.jpg')}}" alt="" class="card-img" />
                                    </div>

                                    <div class="col-8 h-100">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title pt-0 pb-2 fw-bold" style="font-size: 100%">
                                                Communication
                                            </h5>
                                            <h6 class="card-subtitle fw-bold mb-2 text-body-secondary">
                                                <i class="bi bi-buildings-fill"></i>
                                                Africa Mining Agency
                                            </h6>

                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                                                <div class="col">
                                                    <h6 class="fw-bold card-title m-0 p-1" style="font-size: 11px">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        BKO, ACI 2000
                                                    </h6>
                                                </div>
                                                <div class="col">
                                                    <h6 class="fw-bold card-title m-0 p-1" style="font-size: 11px">
                                                        <i class="bi bi-plus-circle-fill"></i>
                                                        Bac+3/ Exp+2
                                                    </h6>
                                                </div>
                                                <div class="col">
                                                    <h6 class="fw-bold card-title m-0 p-1" style="font-size: 11px">
                                                        <i class="bi bi-clock-fill"></i>
                                                        Temps Plein
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-2 h-100">
                                        <div class="d-flex align-items-start flex-column">
                                            <div class="mb-auto p-2">
                                                <a href="{{ route('job-infos')}}" class="btn btn-outline-primary p-1"
                                                    style="font-size: 12px">Plus d'info <i class="bi bi-info-circle"></i>
                                                </a>
                                            </div>
                                            <div class="p-2">
                                                <h6 class="fw-bold card-title text-warning m-0 p-1"
                                                    style="font-size: 11px">
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
    </div>
@endsection
