@extends('layouts.appUserAuth')

@section('content')
    <div class="pagetitle">
        <h1>Titre de la page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Tableau de board</a></li>
                <li class="breadcrumb-item">Mon compte</li>
                <li class="breadcrumb-item active">Titre de la page</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="section candidature">
        
    </div>
@endsection
