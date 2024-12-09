@extends('layouts.appGuest')

@section('content')
    <h1 class="mb-3 text-2xl">Create</h1>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="{{ route('detail.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse de l'offre</label>
                    <input type="text" class="form-control" name="offre_adresse" value="{{ old('offre_adresse') }}"
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
                    <input type="text" class="form-control" name="offre_situation" value="{{ old('offre_situation') }}"
                        id="exampleInputEmail1" aria-describedby="offerDeadline">

                    <div class="mt-1">
                        @error('offre_situation')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Horaire de l'offre</label>
                    <input type="text" class="form-control" name="offre_horaire" value="{{ old('offre_horaire') }}"
                        id="exampleInputEmail1" aria-describedby="offerDeadline">

                    <div class="mt-1">
                        @error('offre_horaire')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Salaire</label>
                    <input type="text" class="form-control" name="offre_salaire" id="exampleInputEmail1"
                        aria-describedby="offerDeadline" value="{{ old('offre_salaire') }}">

                    <div class="mt-1">
                        @error('offre_salaire')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
