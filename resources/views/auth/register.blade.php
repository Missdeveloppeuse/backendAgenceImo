@extends('layout')

@section('title', 'Register Admin')

@section('content')

<div class="flex items-center justify-center min-h-[80vh]">

    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">

        <h2 class="text-2xl font-bold text-center text-indigo-600 mb-6">
            Inscription Admin
        </h2>

        {{-- ERROR --}}
        @if($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
            @csrf

            {{-- NAME --}}
            <div>
                <label class="text-sm font-medium">Nom</label>
                <input type="text" name="name"
                    class="w-full mt-1 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="Admin name">
            </div>

            {{-- EMAIL --}}
            <div>
                <label class="text-sm font-medium">Email</label>
                <input type="email" name="email"
                    class="w-full mt-1 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="admin@email.com">
            </div>

            {{-- PASSWORD --}}
            <div>
                <label class="text-sm font-medium">Mot de passe</label>
                <input type="password" name="password"
                    class="w-full mt-1 p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="********">
            </div>

            {{-- BUTTON --}}
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white p-3 rounded-lg transition">
                Créer compte
            </button>

        </form>

        <p class="text-sm text-center mt-4">
            Déjà un compte ?
            <a href="{{ route('login') }}" class="text-indigo-600 font-semibold">
                Se connecter
            </a>
        </p>

    </div>

</div>

@endsection