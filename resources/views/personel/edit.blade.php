@extends('layouts.appGuest')

@section('content')
    <h1 class="mb-3 text-2xl">Create</h1>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="/personels/{{ $competencePersonnelle->id }}/edit">
                @csrf
                @method('PATCH')


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom de la competence</label>
                    <input type="text" class="form-control" name="offre_adresse"
                        value="{{ $competencePersonnelle->nom_de_la_competence }}" id="exampleInputEmail1"
                        aria-describedby="offerName">

                    <div class="mt-1">
                        @error('offre_adresse')
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

            <form action="/personels/{{ $competencePersonnelle->id }}" method="post" class="hidden" id="delete-form">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection
