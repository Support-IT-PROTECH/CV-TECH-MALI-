@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row mt-4">
            @foreach ($offre_details as $offre_detail)
                <div class="col-md-6 bg-slate-300 p-3">
                    <h1 class="my-2">{{ $offre_detail->adresse_offre }}</h1>

                    <p class="my-2">{{ $offre_detail->situation_offre }}</p>
                    <p class="my-2">{{ $offre_detail->horaire_offre }}</p>
                    <p class="my-2">{{ $offre_detail->salaire_offre }}</p>

                    <a href="{{ route('detail.show', $offre_detail) }}" class="btn btn-outline-primary"> Voir plus</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
