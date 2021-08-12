<div class="dropdown">
    <button class="btn btn-secondary btn-sm dropdown-toggle text-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ isset($currentDepartment) ? ucwords($currentDepartment->name) : 'Filter by Department' }}
    </button>

    <div class="dropdown-menu dropdown-menu-right mt-1" style="max-height: 400%; overflow-y: auto;" aria-labelledby="dropdownMenu2">
        <a href="/matched/?{{ http_build_query(request()->except('department', 'page')) }}" class="dropdown-item">All</a>
        @foreach($departments as $dep)
            <a href="/matched/?department={{ $dep->slug }}&{{ http_build_query(request()->except('department', 'page')) }}" class="dropdown-item">{{ucwords($dep->name)}}</a>
        @endforeach
    </div>

</div>
