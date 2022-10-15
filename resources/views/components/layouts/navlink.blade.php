@props([
    'title',
    'link',
    'route'
])

<a class="nav-link @if(Route::is($route)) active @endif"
   aria-current="page"
   href="{{ $link }}">{{ $title }}</a>
