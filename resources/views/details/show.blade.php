@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="text-2xl mb-3">{{ $offreDetail->adresse_offre }}</h1>

            <p class="">Ce travail sera un travail en {{ $offreDetail->situation_offre }} </p>

            <p>Vous ferez {{ $offreDetail->horaire_offre }}h(s)/semaine </p>

            <p>Le salaire pour cette offre est de {{ $offreDetail->salaire_offre }} F CFA </p>
        </div>

        <div class="buttons">
            <a href="{{ route('detail.edit', $offreDetail) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection
