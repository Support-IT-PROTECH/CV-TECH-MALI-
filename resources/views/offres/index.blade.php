@extends('layouts.appGuest')

@section('content')
    @foreach ($offres as $offre)
        <h1>{{ $offre->nom_offre }}</h1>

        <img src="./uploads/{{ $offre->logo_offre }}" alt="">
    @endforeach



    {{-- <div class="pagination">
                {{ $offres->links() }}
            </div> --}}
@endsection
