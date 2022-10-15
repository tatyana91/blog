@props([
    'title',
    'route'
])

<a class="nav-link @if(Route::is($route)) active @endif"
   aria-current="page"
   href="{{ route($route) }}">{{ $title }}</a>
