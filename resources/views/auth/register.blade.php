@extends('layouts.app')


@section('content')
<div class="bg-nailbglog pt-20 pb-20 bg-cover backdrop-blur-lg"> 
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10 s">

    <div class="flex">
        <div class="w-full rounded-lg border-5 border-white pt-10"> 
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

               <header class="font-semibold bg-black text-white py-4 px-8 sm:py-8 sm:pt-8 sm:rounded-t-md text-2xl text-center"> 
                    {{ __('Registrar') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Nombre') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Correo') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Contraseña') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirmar Contraseña') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-white bg-customPink hover:bg-contrastPink sm:py-4">
                            {{ __('Registrar') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('¿Ya tienes una cuenta?') }}
                            <a class="text-customPink hover:text-customPink no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Iniciar sesión') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
</div>
@endsection

