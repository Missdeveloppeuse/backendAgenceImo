<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel')</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Remix Icons --}}
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />

</head>

<body class="bg-gray-100 min-h-screen">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md">

        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <h1 class="text-2xl font-bold text-indigo-600">
                Admin Panel
            </h1>

            <div class="flex items-center gap-4">

                @auth('admin')
                    <span class="text-gray-700 font-medium">
                        {{ auth('admin')->user()->name }}
                    </span>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button
                            type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition"
                        >
                            <i class="ri-logout-box-r-line"></i>
                            Logout
                        </button>
                    </form>
                @endauth

            </div>

        </div>

    </nav>

    {{-- Content --}}
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>