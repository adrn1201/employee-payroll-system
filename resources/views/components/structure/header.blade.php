@props(['label'])
<!-- Header -->
<!-- Header -->
<header class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">{{ $label }}</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <x-structure.breadcrumb />
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle text-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter By Department
                        </button>

                        <div class="dropdown-menu dropdown-menu-right mt-1" style="max-height: 400%; overflow-y: auto;" aria-labelledby="dropdownMenu2">
                            <a href="/?{{ http_build_query(request()->except('department', 'page')) }}" class="dropdown-item" type="button">All</a>
                            @foreach(App\Models\Department::all() as $dep)
                                <a href="" class="dropdown-item" type="button">{{$dep->name}}</a>
                            @endforeach
                        </div>

                    </div>
                    {{--<a href="#" class="btn btn-sm btn-neutral dropdown">Filters</a>--}}
                </div>
            </div>
            <!-- Card stats -->
            @if(Request::is('/'))
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">No. of Employees</h5>
                                        <span class="h2 font-weight-bold mb-0">{{App\Models\Employee::count()}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="ni ni-chart-pie-35"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">No. of Departments</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ App\Models\Department::count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                            <i class="ni ni-money-coins"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</header>
