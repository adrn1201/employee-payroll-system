@props(['active' => false])
@php
    $classes = 'nav-link';

     if ($active) $classes .= ' active';
@endphp

<a {{ $attributes(['class' => $classes])}}>{{ $slot }}</a>
