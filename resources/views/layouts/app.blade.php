<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecoproject</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-gray-100">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="md:flex md:items-center md:gap-12">
                    <a href="#" class="block text-teal-600 text-[24px]">
                        <i class="fas fa-leaf"></i>
                        Green
                    </a>
                </div>
                {{-- @if (!auth()->user()) --}}
                <div class="hidden md:block">
                    <nav>
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a href="#main" class="text-gray-500 transition hover:text-gray-500/75">
                                    Main
                                </a>
                            </li>
                            <li>
                                <a href="#about" class="text-gray-500 transition hover:text-gray-500/75">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#service" class="text-gray-500 transition hover:text-gray-500/75">
                                    Service
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- @endif --}}
                @if (!auth()->user())
                    <div class="flex items-center gap-4">
                        <div class="sm:flex sm:gap-4">
                            <a href="{{ route('login') }}" class="rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600">
                                Register
                            </a>
                        </div>
                    </div>
                @else
                    <div class="flex items-center gap-4">
                        <div class="sm:flex sm:gap-4">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="flex items-center gap-4 justify-center rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white shadow">
                                    <div>{{ auth()->user()->name }}</div>
                                    <i class="fas fa-user"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </header>

    <main class="p-5">
        @yield('content')
    </main>

    <footer class="bg-gray-100">
        <div class="max-w-5xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center gap-4 text-teal-600 text-[40px] items-center">
                <i class="fas fa-leaf"></i>
                Green
            </div>
            <p class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-500">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt
                consequuntur amet culpa cum itaque neque.
            </p>
            <nav class="mt-12">
                <ul class="flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                    <li>
                        <a href="#main" class="text-gray-700 transition hover:text-gray-700/75">
                            Main
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="text-gray-700 transition hover:text-gray-700/75">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#service" class="text-gray-700 transition hover:text-gray-700/75">
                            Service
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
</body>

</html>
