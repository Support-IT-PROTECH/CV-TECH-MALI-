@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($offres as $offre)
                <div class="col-md-6">
                    <div class="mb-3 bg-slate-300 p-3">
                        <h3 class="mb-2">{{ $offre->nom_offre }}</h3>
                        <h4 class="mb-2">Deadline: {{ $offre->date_limite }}</h4>
                        <p class="mb-2">{{ $offre->description }}</p>
                        <p class="mb-2"> Your role: {{ $offre->role }}</p>
                        <div class="buttons">
                            <a href="{{ route('offre.show', $offre) }}">
                                <button type="button" class="btn btn-primary">Voir plus</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="pagination">
                {{ $offres->links() }}
            </div>
        </div>
    </div>
@endsection
