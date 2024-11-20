@extends('layouts.appGuest')

@section('content')
    <div class="mb-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-sans">Offres</h1>

            <div class="buttons">
                <a href="{{ route('travail.create') }}" class="btn btn-primary">Create Offres</a>
            </div>
        </div>
        <hr>
    </div>

    <div class="tab-pane fade show active" id="navs-pills-last-offer" role="tabpanel">

        <div class="row">
            {{-- @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex align-items-center p-1">
                                <img class="card-img card-img-left" src="{{ asset('assets/img/elements/' . $i . '.jpg') }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">Africa Agency Mining</h5>
                                    <p class="card-text">
                                        Récrute : 1 Spécialiste en Marketing Digital
                                    </p>
                                    <a href="#" class="link">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endfor --}}

            @foreach ($travails as $travail)
                <div class="col-md-6">

                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex align-items-center p-1">
                                <img class="card-img card-img-left" src="./image/{{ $travail->company_logo }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $travail->company_name }}</h5>
                                    <p class="card-text">
                                        Récrute : {{ $travail->offre_name }}
                                    </p>
                                    <a href="#" class="link">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        <div class="text-center">
            {{-- <a href="#" class="btn btn-outline-primary">Voir plus d'offre</a> --}}
            {{ $travails->links() }}
        </div>

    </div>
@endsection
