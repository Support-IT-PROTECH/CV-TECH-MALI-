@extends('layouts.appGuest')

@section('content')
    <h1>Create</h1>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="{{ route('detail.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse de l'offre</label>
                    <input type="text" class="form-control" name="offre_adresse" id="exampleInputEmail1"
                        aria-describedby="offerName">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Situation de l'offre (temps Plein/ temps
                        partiel)</label>
                    <input type="text" class="form-control" name="offre_situation" id="exampleInputEmail1"
                        aria-describedby="offerDeadline">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Horaire de l'offre</label>
                    <input type="text" class="form-control" name="offre_horaire" id="exampleInputEmail1"
                        aria-describedby="offerDeadline">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Salaire</label>
                    <input type="text" class="form-control" name="offre_salaire" id="exampleInputEmail1"
                        aria-describedby="offerDeadline">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
