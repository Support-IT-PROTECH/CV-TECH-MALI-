@extends('layouts.appGuest')

@section('content')
    <div class="container">
        <div class="row ml-1">
            <form class="col-md-7" method="POST" action="{{ route('offre.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h1 class="text-base/10 font-semibold text-gray-900">Offres</h1>
                        <p class="mt-1 text-sm/6 text-gray-600">Cette page sera utiliser pour que les Entreprises puissen
                            creer leurs
                            offres</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <label for="offre_name" class="block text-sm/6 font-medium text-gray-900">Nom de
                                    l'offre</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                        <input type="text" name="offre_name" id="offre_name"
                                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            placeholder="Assistant(e) Manager" value="{{ old('offre_name') }}">
                                    </div>
                                </div>

                                @error('offre_name')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="date_limite" class="block text-sm/6 font-medium text-gray-900">Date Limite de
                                    l'offre</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                        <input type="text" name="date_limite" id="date_limite"
                                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            placeholder="20-12-2025" value="{{ old('date_limite') }}">
                                    </div>
                                </div>

                                @error('date_limite')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="offre_description" class="block text-sm/6 font-medium text-gray-900">Description
                                    de
                                    l'offre</label>
                                <div class="mt-2">
                                    <textarea name="offre_description" id="offre_description" rows="3"
                                        class="block w-full h-32 resize-none rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('offre_description') }}</textarea>
                                </div>

                                @error('offre_description')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="offre_role" class="block text-sm/6 font-medium text-gray-900">Role du
                                    postulant</label>
                                <div class="mt-2">
                                    <textarea name="offre_role" id="offre_role" rows="3"
                                        class="block w-full h-32 resize-none rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('offre_role') }}</textarea>
                                </div>

                                @error('offre_role')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="fileInput">Upload File</label>
                                <input type="file" name="file-upload" class="form-control-file mt-3" id="fileInput">

                                @error('file-upload')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Competences Techniques</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Les competences techniques que le postulant devra avoir pour
                            postuler</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <label for="competence_technique" class="block text-sm/6 font-medium text-gray-900">Nom des
                                    competences (séparé par des virgules)</label>
                                <div class="mt-2">
                                    <textarea name="competence_technique" id="competence_technique" autocomplete="given-name"
                                        class="block h-28 resize-none w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('competence_technique') }}</textarea>
                                </div>

                                @error('competence_technique')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>


                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Competences Personnelles</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Les competences personnelles que le postulant devra avoir
                            pour
                            postuler</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <label for="competence_personnelle" class="block text-sm/6 font-medium text-gray-900">Nom
                                    des
                                    competences (séparé par des virgules)</label>
                                <div class="mt-2">
                                    <textarea name="competence_personnelle" id="competence_personnelle" autocomplete="given-name"
                                        class="block h-28 resize-none w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('competence_personnelle') }}</textarea>
                                </div>

                                @error('competence_personnelle')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Responsabilite du postulant</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Les responsabilites que le postulant aura dans
                            l'Entreprise</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <label for="responsabilite_offre" class="block text-sm/6 font-medium text-gray-900">Nom
                                    des
                                    responsabilités (séparé par des virgules)</label>
                                <div class="mt-2">
                                    <textarea name="responsabilite_offre" id="responsabilite_offre" autocomplete="given-name"
                                        class="block h-28 resize-none w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('responsabilite_offre') }}</textarea>
                                </div>

                                @error('responsabilite_offre')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Details de l'offre</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Specifications des details de l'offre</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-5">
                                <label for="adresse_offre" class="block text-sm/6 font-medium text-gray-900">Adresse de
                                    l'offre</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                        <input type="text" name="adresse_offre" id="adresse_offre"
                                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            placeholder="Bacodjicoroni ACI" value="{{ old('adresse_offre') }}">
                                    </div>
                                </div>

                                @error('adresse_offre')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="situation_offre" class="block text-sm/6 font-medium text-gray-900">Situation
                                    de
                                    l'offre(Temps Plein/Temps Partiel)</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                        <input type="text" name="situation_offre" id="situation_offre"
                                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            placeholder="Temps Plein" value="{{ old('situation_offre') }}">
                                    </div>
                                </div>

                                @error('situation_offre')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="experience_offre"
                                    class="block text-sm/6 font-medium text-gray-900">Experiences professionnelles requis
                                    pour pouvoir postuler (séparé par des virgules)</label>
                                <div class="mt-2">
                                    <textarea name="experience_offre" id="experience_offre" autocomplete="given-name"
                                        class="block h-28 resize-none w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('experience_offre') }}</textarea>
                                </div>

                                @error('experience_offre')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div class="sm:col-span-5">
                                <label for="horaire_offre" class="block text-sm/6 font-medium text-gray-900">Nombre
                                    d'heure par
                                    semaine de l'offre</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                        <input type="text" name="horaire_offre" id="horaire_offre"
                                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            value="{{ old('horaire_offre') }}" placeholder="40">
                                    </div>

                                    @error('horaire_offre')
                                        <div class="mt-1">
                                            <p class="text-red-500">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:col-span-5">
                                <label for="salaire_offre" class="block text-sm/6 font-medium text-gray-900">Salaire de
                                    l'offre</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                        <input type="text" name="salaire_offre" id="salaire_offre"
                                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                                            value="{{ old('salaire_offre') }}" placeholder="350.000">
                                    </div>
                                </div>

                                @error('salaire_offre')
                                    <div class="mt-1">
                                        <p class="text-red-500">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a type="button" href="{{ route('offre.index') }}"
                            class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
