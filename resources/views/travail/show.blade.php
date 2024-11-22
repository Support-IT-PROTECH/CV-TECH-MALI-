@extends('layouts.appGuest')

@section('content')
    <div class="col-md-6">

        <div class="mb-3">
            {{-- <div class="row g-0">
                <div class="col-md-3 d-flex align-items-center p-1">
                    <img class="card-img card-img-left" src="./image/{{ $travail->company_logo }}" alt="Card image">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">{{ $travail->company_name }}</h5>
                        <p class="card-text">
                            Récrute : {{ $travail->offre_name }}
                        </p>
                        {{-- <a href="/travail/{{ $travail->id }}/edit" class="link mt-2 inline-block">En savoir plus</a>
                    </div>
                </div>
            </div> --}}
            <div class="mt-6">
                <h1 class="font-sans text-2xl">{{ $travail->company_name }}</h1>
            </div>

            <div class="mt-6">
                <h1 class="font-sans">{{ $travail->offre_name }}</h1>
            </div>
        </div>

    </div>

    <div class="mt-6 flex gap-2 items-center">
        <p class="">
            <a href="/travails/{{ $travail->id }}/edit" class="btn btn-outline-primary">Modifier l'offre</a>
        </p>

        <p>
            <a href="/travails" class="btn btn-primary">Retour à la liste des offres</a>
        </p>
    </div>
@endsection
