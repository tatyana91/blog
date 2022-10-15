@props([
    'title'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Index</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <x-layouts.navlink route="posts.index" link="{{ route('posts.index') }}" title="Blog"/>
                        </li>
                        <li class="nav-item">
                            <x-layouts.navlink route="categories.index" link="{{ route('categories.index') }}" title="Categories"/>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div>
        <div class="container">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    <footer>
        <div class="container">
            Footer
        </div>
    </footer>
</body>
</html>

