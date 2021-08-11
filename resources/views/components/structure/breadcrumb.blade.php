@php
        $classes = 'ni';
        $icon = 'fas';
        $text = '';

        if(Request::is('/')){
            $classes = null;
            $icon .= ' fa-home';
            $text="Dashboard";
        }
        else if(Request::is('create-employee')){
            $classes .= ' ni-fat-add';
            $text="Create Employee";
        }

@endphp

<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
    <li class="breadcrumb-item"><a href="#"><i {{ $attributes(['class' => $classes ?? $icon  ])}}></i></a></li>
    <li class="breadcrumb-item"><a href="#">{{$text}}</a></li>
</ol>
