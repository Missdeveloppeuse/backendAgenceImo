@extends('layout')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-7xl mx-auto">

    {{-- HEADER --}}
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            Dashboard Admin 👋
        </h1>
        <p class="text-gray-500">
            Bienvenue dans votre espace d'administration
        </p>
    </div>

    {{-- STATS CARDS --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- USERS --}}
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Utilisateurs</p>
                    <h2 class="text-2xl font-bold">120</h2>
                </div>
                <div class="text-indigo-600 text-3xl">
                    <i class="ri-user-3-line"></i>
                </div>
            </div>
        </div>

        {{-- ADMINS --}}
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Admins</p>
                    <h2 class="text-2xl font-bold">5</h2>
                </div>
                <div class="text-green-600 text-3xl">
                    <i class="ri-shield-user-line"></i>
                </div>
            </div>
        </div>

        {{-- SALES / DATA --}}
        <div class="bg-white p-6 rounded-2xl shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Ventes</p>
                    <h2 class="text-2xl font-bold">320</h2>
                </div>
                <div class="text-orange-500 text-3xl">
                    <i class="ri-bar-chart-2-line"></i>
                </div>
            </div>
        </div>

    </div>

    {{-- TABLE SECTION --}}
    <div class="mt-8 bg-white p-6 rounded-2xl shadow-md">

        <h2 class="text-xl font-bold mb-4">
            Dernières activités
        </h2>

        <table class="w-full text-left border-collapse">

            <thead>
                <tr class="border-b">
                    <th class="py-2">Nom</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-b">
                    <td class="py-2">Admin 1</td>
                    <td>admin1@gmail.com</td>
                    <td>Admin</td>
                    <td>2026-01-01</td>
                </tr>

                <tr class="border-b">
                    <td class="py-2">User 1</td>
                    <td>user1@gmail.com</td>
                    <td>User</td>
                    <td>2026-01-02</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection