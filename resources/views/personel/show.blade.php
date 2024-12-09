@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="text-2xl mb-3">{{ $competencePersonnelle->id }}</h1>

            <p class="">Ce travail sera un travail en {{ $competencePersonnelle->nom_de_la_competence }} </p>


        </div>

        <div class="buttons">
            <a href="/personels/{{ $competencePersonnelle->id }}/edit" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection
