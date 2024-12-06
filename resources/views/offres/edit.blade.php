@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <h1 class="text-2xl mb-3">Edit an Offer</h1>
        </div>
    </div>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="{{ route('offre.update', $offre) }}">
                @csrf
                @method('PATCH')
                <div class="infos">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom de l'offre</label>
                        <input type="text" class="form-control" name="offre_name" value="{{ $offre->nom_offre }}"
                            id="exampleInputEmail1" aria-describedby="offerName">

                        @error('offre_name')
                            <div class="text-red-400 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date Limite de 'offre</label>
                        <input type="text" class="form-control" name="offre_date" value="{{ $offre->date_limite }}"
                            id="exampleInputEmail1" aria-describedby="offerDeadline">

                        @error('offre_date')
                            <div class="text-red-400 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="desc">

                    <div class="mb-3">
                        <label for="description-offre" class="form-label">Description de l'offre</label>

                        <textarea class="form-control resize-none" style="height: 150px" name="offre_desc" id="description-offre">{{ old('description', $offre->description) }}</textarea>

                        @error('offre_desc')
                            <div class="text-red-400 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role-offre" class="form-label">Role du postulant</label>
                        <textarea class="form-control resize-none" value="{{ $offre->role }}" name="offre_role" id="role-offre"
                            style="height: 150px">{{ old('role', $offre->role) }}</textarea>

                        @error('offre_role')
                            <div class="text-red-400 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success">Update</button>
                <a href="{{ route('offre.destroy', $offre) }}" type="submit" class="btn btn-outline-danger">Delete</a>
            </form>
        </div>
    </div>
@endsection
