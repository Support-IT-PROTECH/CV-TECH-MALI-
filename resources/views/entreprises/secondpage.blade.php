@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://pixabay.com/illustrations/sea-sunset-boat-nature-ocean-sky-7331682/" alt="Logo entreprises"
                    class="image rounded-2xl" width="250">
            </div>

            <div class="content mt-6 col-md-7">
                <h1 class="text-xl">Nom de l'entreprise</h1>

                <p class="text-pretty mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat vitae est non modi? Consectetur quae
                    vel natus ab quidem quam. Veniam minus iure ipsum, alias facilis fugit dolorum assumenda accusantium,
                    optio iste totam facere maxime labore ut quisquam blanditiis nobis.
                </p>

                <div class="domain mt-4 mb-2">
                    <h3 class="text-xl">Domaine d'activité</h3>
                    <p class="py-1">Industry, Sector, Sub-sector</p>
                    <p class="py-1">Industry, Sector, Sub-sector</p>
                    <p class="py-1">Industry, Sector, Sub-sector</p>
                    <p class="py-1">Industry, Sector, Sub-sector</p>
                    <p class="py-1">Industry, Sector, Sub-sector</p>
                </div>

                <div class="offres mt-4">
                    <h3 class="text-xl">Offres disponibles</h3>
                    <div class="card shadow-sm p-4 mt-3">
                        <h4 class="text-sm/6 font-semibold text-gray-900">Nom de l'offre</h4>
                        <p class="mt-2 text-sm/6 text-gray-600">Description de l'offre</p>
                        {{-- <div class="flex gap-x-2">
                            <a href="" class="text-sm/6 font-medium text-gray-900">Voir plus</a>
                            <a href="" class="text-sm/6 font-medium text-indigo-600">Postuler</a>
                        </div> --}}
                    </div>
                    <div class="card shadow-sm p-4 mt-3">
                        <h4 class="text-sm/6 font-semibold text-gray-900">Nom de l'offre</h4>
                        <p class="mt-2 text-sm/6 text-gray-600">Description de l'offre</p>
                        {{-- <div class="flex gap-x-2">
                            <a href="" class="text-sm/6 font-medium text-gray-900">Voir plus</a>
                            <a href="" class="text-sm/6 font-medium text-indigo-600">Postuler</a>
                        </div> --}}
                    </div>
                    <div class="card shadow-sm p-4 mt-3">
                        <h4 class="text-sm/6 font-semibold text-gray-900">Nom de l'offre</h4>
                        <p class="mt-2 text-sm/6 text-gray-600">Description de l'offre</p>
                        {{-- <div class="flex gap-x-2">
                            <a href="" class="text-sm/6 font-medium text-gray-900">Voir plus</a>
                            <a href="" class="text-sm/6 font-medium text-indigo-600">Postuler</a>
                        </div> --}}
                    </div>
                    <div class="card shadow-sm p-4 mt-3">
                        <h4 class="text-sm/6 font-semibold text-gray-900">Nom de l'offre</h4>
                        <p class="mt-2 text-sm/6 text-gray-600">Description de l'offre</p>
                        {{-- <div class="flex gap-x-2">
                            <a href="" class="text-sm/6 font-medium text-gray-900">Voir plus</a>
                            <a href="" class="text-sm/6 font-medium text-indigo-600">Postuler</a>
                        </div> --}}
                    </div>
                    {{-- <div class="card shadow-sm p-4"> --}}
                </div>

                <div class="mt-4">
                    <a href=""><i class="fas fa-arrow-left"></i> Retour à la liste</a>
                </div>

            </div>
        </div>
    @endsection
