@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="text-2xl mb-3">{{ $experienceDetail->id }}</h1>

            <p class="">Ce travail sera un travail en {{ $experienceDetail->nom }} </p>


        </div>

        <div class="buttons">
            <a href="/experiences/{{ $experienceDetail->id }}/edit" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection
