@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white md:w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Registrarse</h1>

    <form class="mt-4" method="POST" action="">
    @csrf

        <div class="flex items-center border border-gray-200 rounded-md bg-gray-200 w-full p-2 my-2">
            <i class="fas fa-user text-gray-500 mr-2"></i>
            <input type="text" class="bg-gray-200 text-lg placeholder-gray-900 focus:bg-white w-full" placeholder="nombre" id="name" name="name">
        </div>

        @error('name')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * {{ $message }}</p>
        @enderror

        <div class="flex items-center border border-gray-200 rounded-md bg-gray-200 w-full p-2 my-2">
            <i class="fas fa-envelope text-gray-500 mr-2"></i>
            <input type="email" class="bg-gray-200 text-lg placeholder-gray-900 focus:bg-white w-full" placeholder="correo electronico" id="email" name="email">
        </div>

        @error('email')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * {{ $message }}</p>
        @enderror

        <div class="flex items-center border border-gray-200 rounded-md bg-gray-200 w-full p-2 my-2">
            <i class="fas fa-lock text-gray-500 mr-2"></i>
            <input type="password" class="bg-gray-200 text-lg placeholder-gray-900 focus:bg-white w-full" placeholder="contraseña" id="password" name="password">
        </div>

        @error('password')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2"> * {{ $message }}</p>
        @enderror

        <div class="flex items-center border border-gray-200 rounded-md bg-gray-200 w-full p-2 my-2">
            <i class="fas fa-lock text-gray-500 mr-2"></i>
            <input type="password" class="bg-gray-200 text-lg placeholder-gray-900 focus:bg-white w-full" placeholder="confirmar contraseña" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600"> Registrarse</button>
    </form>
</div>

@endsection
