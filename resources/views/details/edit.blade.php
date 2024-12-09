@extends('layouts.appGuest')

@section('content')
    <h1 class="mb-3 text-2xl">Create</h1>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="/details/{{ $offreDetail->id }}">
                @csrf
                @method('PATCH')


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse de l'offre</label>
                    <input type="text" class="form-control" name="offre_adresse" value="{{ $offreDetail->adresse_offre }}"
                        id="exampleInputEmail1" aria-describedby="offerName">

                    <div class="mt-1">
                        @error('offre_adresse')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Situation de l'offre (temps Plein/ temps
                        partiel)</label>
                    <input type="text" class="form-control" name="offre_situation"
                        value="{{ $offreDetail->situation_offre }}" id="exampleInputEmail1"
                        aria-describedby="offerDeadline">

                    <div class="mt-1">
                        @error('offre_situation')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Horaire de l'offre</label>
                    <input type="text" class="form-control" name="offre_horaire"
                        value="{{ $offreDetail->horaire_offre }}" id="exampleInputEmail1" aria-describedby="offerDeadline">

                    <div class="mt-1">
                        @error('offre_horaire')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Salaire</label>
                    <input type="text" class="form-control" name="offre_salaire" id="exampleInputEmail1"
                        aria-describedby="offerDeadline" value="{{ $offreDetail->salaire_offre }}"">

                    <div class="mt-1">
                        @error('offre_salaire')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex gap-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button form="delete-form" class="text-red-500 text-sm font-bold">
                        Delete
                    </button>
                </div>
            </form>

            <form action="/details/{{ $offreDetail->id }}" method="post" class="hidden" id="delete-form">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
