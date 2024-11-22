@extends('layouts.appGuest')

@section('content')
    {{-- <form method="POST" action="/travail/{{ $travail->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Nom de
                            l'entreprise</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="company" id="company"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Africa Agency Mining" required value="{{ $travail->company_name }}">
                            </div>
                        </div>
                        @error('company')
                            <p class="text-xs text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="logo" class="block text-sm font-medium leading-6 text-gray-900">Logo de
                            l'entreprise</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="file" name="logo" id="logo"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$50,000 Per Year" required>
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-xs text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="offre" class="block text-sm font-medium leading-6 text-gray-900">Nom de
                            l'offre</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="offre" id="offre"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="! expert marketing" required value="{{ $travail->offre_name }}">
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-xs text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>


            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">
                    Delete
                </button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/travail/{{ $travail->id }}" type="button" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </a>

                <div>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    <form action="/travail/{{ $travail->id }}" method="post" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form> --}}

    <form action="/travails/{{ $travail->id }}" method="post">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Nom de
                            l'entreprise</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="company" id="company"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Africa Agency Mining" required value="{{ $travail->company_name }}">
                            </div>
                        </div>
                        @error('company')
                            <p class="text-xs text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <div class="sm:col-span-4">
                        <label for="logo" class="block text-sm font-medium leading-6 text-gray-900">Logo de
                            l'entreprise</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="file" name="logo" id="logo"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$50,000 Per Year" required>
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-xs text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                        @enderror
                    </div> --}}

                    <div class="sm:col-span-4">
                        <label for="offre" class="block text-sm font-medium leading-6 text-gray-900">Nom de
                            l'offre</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="offre" id="offre"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="1 expert marketing" required value="{{ $travail->offre_name }}">
                            </div>
                        </div>
                        @error('salary')
                            <p class="text-xs text-red-500 font-semibold italic mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>


            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">
                    Delete
                </button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/travails/{{ $travail->id }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </a>

                <div>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </form>

    <form action="/travails/{{ $travail->id }}" method="post" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
@endsection
