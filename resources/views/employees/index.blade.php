<x-structure.layout>

    <x-structure.sidenav class="sidenav" />

    {{-- Main content --}}
    <main class="main-content" id="panel">
        <x-structure.topnav/>

        <x-structure.header label="Filtered Records" />

        {{-- Page content --}}
        @if($employees->count())
        <section class="container-fluid mt--6">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Employee Record</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="/employee-records" class="btn btn-sm btn-primary">See all</a>
                                </div>
                            </div>
                        </div>

                        <section class="table-responsive">

                            {{-- Start Employee table --}}
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Hours Worked</th>
                                        <th scope="col">Hourly Rate</th>
                                        <th scope="col">Basic Pay</th>
                                        <th scope="col">Overtime Pay</th>
                                        <th scope="col">Gross Pay</th>
                                        <th scope="col">Tax</th>
                                        <th scope="col">Net Pay</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                @foreach($employees as $list)
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            {{$list->first_name}} {{$list->last_name}}
                                        </th>
                                        <td>
                                            {{$list->department->name}}
                                        </td>
                                        <td>
                                            {{$list->hours_worked}}
                                        </td>
                                        <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> {{$list->hourly_rate}}
                                        </td>
                                        <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> {{$list->basic_pay}}
                                        </td>
                                        <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i>  {{$list->overtime_pay}}
                                        </td>
                                        <td>
                                            {{$list->gross_pay}}
                                        </td>
                                        <td>
                                            {{$list->tax}}
                                        </td>
                                        <td>
                                            {{$list->net_pay}}
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item " href="/employees/{{ $list->id }}/edit">Edit</a>
                                                    <form method="POST" action="/employees/{{$list->id}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        </section>
                        {{$employees->links()}}
                    </div>
                </div>
            </div>
            @else
                <p class="text-center mt-4 font-weight-bold">No records yet. Please check back later</p>
            @endif
            {{-- End of Employees Table --}}
            <x-structure.footer />

        </section>
    </main>

</x-structure.layout>

