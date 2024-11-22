@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img src="image/1732115293.jpg" alt="Logo entreprises" class="image rounded-2xl"
                    width="250"></div>

            <div class="content mt-6">
                <h1 class="text-xl">Nom de l'entreprise</h1>

                <p class="text-pretty mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis est error fuga dicta expedita
                    voluptatibus, accusantium odit esse repellat maiores porro velit atque rerum! Fuga eligendi excepturi
                    voluptas inventore esse officiis totam nemo ipsam enim deserunt. Molestias dolorum iure natus numquam
                    hic alias neque nesciunt dignissimos rem, illum nihil ullam repellat illo cum. Iste, maxime? Asperiores
                    pariatur odio consectetur tenetur.
                </p>
            </div>

            {{-- <div class="buttons mt-3">
                <a href="{{ route('travail.index') }}" class="btn btn-primary">Offres</a>
                <a href="#" class="btn btn-outline-primary">Contact</a>
            </div> --}}
        </div>
    </div>

    {{-- <div class="container">
        <div class="row mt-6">
            <h2 class="mb-4 text-xl">Les offres de l'entreprises</h2>

            @foreach ($travails as $travail)
                <div class="col-md-6">

                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex align-items-center p-1">
                                <img class="card-img card-img-left" src="./image/{{ $travail->company_logo }}"
                                    alt="Card image">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $travail->company_name }}</h5>
                                    <p class="card-text">
                                        Récrute : {{ $travail->offre_name }}
                                    </p>
                                    <a href="/travails/{{ $travail->id }}" class="link mt-2 inline-block">En savoir
                                        plus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div> --}}

    <div class="container mt-6">
        <div class="row px-3">
            <div class="flex justify-between">

                <div class="informations">
                    <h2 class="text-xl">Domaine d'expertise</h2>
                    <ul class="mt-2">
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                    </ul>
                </div>
                <div class="contacts">
                    <h3 class="text-xl">Contacts</h3>
                    <p class="my-2">entreprise@gmail.com</p>
                    <p class="my-2">123-456-789/012-345-678</p>
                    <p class="my-2">Ville, Pays</p>
                    <p class="my-2">Lorem ipsum dolor sit.</p>
                </div>
                <div class="socials">
                    <h3 class="text-xl">Social Media</h3>
                    <p class="my-1">
                        <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
                    </p>
                    <p class="my-1">
                        <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
                    </p>
                    <p class="my-1">
                        <a href="https://x.com" target="blank"><i class="fa-brands fa-x-twitter"></i> Twitter</a>
                    </p>
                    <p class="my-1">
                        <a href="https://youtube.com" target="blank"><i class="fa-brands fa-youtube"></i> YouTube</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
