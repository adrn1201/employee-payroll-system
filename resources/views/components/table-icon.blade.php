@props(['hours'])

@php
    $iconClass = 'fas';

    ($hours < 40) ? $iconClass .= ' fa-arrow-down text-danger mr-3' : $iconClass .= ' fa-arrow-up text-success mr-3';

@endphp

<i {{ $attributes(['class' => $iconClass])}}></i>
