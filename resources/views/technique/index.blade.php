@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row mt-4">
            @foreach ($competenceTechniques as $competenceTechnique)
                <div class="col-md-4 bg-slate-300 p-3 m-3">
                    <h1 class="my-2">{{ $competenceTechnique->id }}</h1>

                    <p class="my-2">{{ $competenceTechnique->nom_de_la_competence }}</p>


                    <a href="/techniques/{{ $competenceTechnique->id }}" class="btn btn-outline-primary"> Voir
                        plus</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
