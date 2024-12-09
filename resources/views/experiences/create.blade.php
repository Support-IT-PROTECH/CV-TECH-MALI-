@extends('layouts.appGuest')

@section('content')
    <h1 class="mb-3 text-2xl">Create</h1>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="{{ route('experiences.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom de l'experience</label>
                    <input type="text" class="form-control" name="experience_name" value="{{ old('experience_name') }}"
                        id="exampleInputEmail1" aria-describedby="offerName">

                    <div class="mt-1">
                        @error('experience_name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
