@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <h1 class="text-2xl mb-3">Create an Offer</h1>
        </div>
    </div>

    <div class="container">
        <div class="row col-md-6">
            <form method="POST" action="{{ route('offre.store') }}">
                @csrf
                <div class="infos">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom de l'offre</label>
                        <input type="text" class="form-control" name="offre_name" id="exampleInputEmail1"
                            aria-describedby="offerName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date Limite de 'offre</label>
                        <input type="text" class="form-control" name="offre_date" id="exampleInputEmail1"
                            aria-describedby="offerDeadline">
                    </div>
                </div>

                <div class="desc">

                    <div class="mb-3">
                        <label for="description-offre" class="form-label">Description de l'offre</label>
                        <textarea class="form-control resize-none" name="offre_desc" id="description-offre" style="height: 150px"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="role-offre" class="form-label">Role du postulant</label>
                        <textarea class="form-control resize-none" name="offre_role" id="role-offre" style="height: 150px"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
