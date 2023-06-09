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
        else if(Request::is('employee-records')){
            $classes .= ' ni-single-02';
            $text="Employee Records";
        }
        else if(Request::is('create-department')){
            $classes .= ' ni-fat-add';
            $text="Create Department";
        }
        else if(Request::is('department-records')) {
            $classes .= ' ni-pin-3';
            $text= "Department Records";
        }
        else if(Request::is('matched')) {
            $classes .= ' ni-single-02';
            $text= "Matched Records";
        }
        else{
             $classes = null;
             $icon .= ' fa-edit';
             $text="Edit Record";
        }
@endphp

<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
    <li class="breadcrumb-item"><a href="{{ request()->url() }}"><i {{ $attributes(['class' => $classes ?? $icon  ])}}></i></a></li>
    <li class="breadcrumb-item"><a href="{{ request()->url() }}">{{$text}}</a></li>
</ol>
