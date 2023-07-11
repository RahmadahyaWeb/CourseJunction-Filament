<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Junction</title>
    {{-- BOOTSTRAP CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Livewire --}}
    @livewireStyles
</head>

<body>
    {{-- Navbar Component --}}
    <x-navbar />
    {{-- End Navbar Component --}}

    {{-- Content --}}
    <div class="container my-3 py-5">
        @yield('content')
    </div>
    {{-- Content --}}

    {{-- Footer --}}
    <footer class="pt-5 my-5">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/#" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="/#about" class="nav-link px-2 text-body-secondary">About</a></li>
            <li class="nav-item"><a href="/#course" class="nav-link px-2 text-body-secondary">Course</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2023 Course Junction</p>
    </footer>
    {{-- End Footer --}}

    {{-- BOOTSTRAP JS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
