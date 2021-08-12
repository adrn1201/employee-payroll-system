@props(['hours'])

@php
  $iconClass = 'fas';

    if ($hours < 40){
         $iconClass .= ' fa-arrow-down text-danger mr-3';
    }
    else{
        $iconClass .= ' fa-arrow-up text-success mr-3';
    }
@endphp

<i {{ $attributes(['class' => $iconClass])}}></i>
