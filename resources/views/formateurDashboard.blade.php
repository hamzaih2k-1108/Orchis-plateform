@extends('master2')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Former_Dashboard') }}
        </h2>
    </x-slot>
    <center>
        <form action="/create" method="POST">
            @csrf
            <div class="mt-4">
                <x-jet-label for="titre" value="{{ __('Title') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" style="width: 30%" required autofocus autocomplete="name" />
            </div>
            <div class="mt-4">
                <x-jet-label for="niveau" value="{{ __('Level:') }}" />
                <select name="niveau" id="niveau" style="width: 30%" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="amateur">Amateur</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Description') }}" />
                <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" style="width: 30%" required autofocus autocomplete="description" />
            </div>
            <div class="mt-4">
                <x-jet-label for="date_debut_formation" value="{{ __('Date of start formation') }}" />
                <x-jet-input id="date_debut_formation" class="block mt-1 w-full" type="date" name="date_debut_formation" :value="old('date_debut_formation')" style="width: 15%" required autofocus autocomplete="date_debut_formation" />
            </div>
            <div class="mt-4">
                <x-jet-label for="duree_formation" value="{{ __('Duration of formation in Month') }}" />
                <x-jet-input id="duree_formation" class="block mt-1 w-full" type="number" min="1" name="duree_formation" :value="old('duree_formation')" style="width: 15%" required autofocus autocomplete="duree_formation" />
            </div>
            <div class="mt-4">
                <x-jet-label for="prix" value="{{ __('Price in USD') }}" />
                <x-jet-input id="prix" class="block mt-1 w-full" type="number" min="1.00" step="0.01" name="prix" :value="old('prix')" style="width: 15%" required autofocus autocomplete="prix" />
            </div>
            <div class="mt-4">
                <x-jet-label for="image_formations" value="{{ __('Image of formation') }}" />
                <x-jet-input id="image_formations" class="block mt-1 w-full" type="file" accept="image/x-png,image/jpeg"  name="image_formations" :value="old('image_formations')" style="width: 30%" required autofocus autocomplete="image_formations" />
            </div>
            <div class="mt-4">
                <x-jet-label for="course" value="{{ __('Source of formation') }}" />
                <x-jet-input id="course" class="block mt-1 w-full" type="text"   name="course" :value="old('course')" style="width: 30%" required autofocus autocomplete="course" />
            </div>
            <br>
            <x-jet-button class="ml-4">
                {{ __('Create') }}
            </x-jet-button>
        </form>
        <br>
    </center>
</x-app-layout>
@endsection