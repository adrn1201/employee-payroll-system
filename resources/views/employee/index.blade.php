<x-structure.layout>

    <x-structure.sidenav class="sidenav" />

    {{-- Main content --}}
    <main class="main-content" id="panel">

        <x-structure.topnav/>

        <x-structure.header label="Records"/>

        {{-- Page content --}}
        <section class="container-fluid mt--6">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Employees</h3>
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
                                @foreach($employees as $emp)
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                {{$emp->first_name}} {{$emp->last_name}}
                                            </th>
                                            <td>
                                                {{$emp->department->name}}
                                            </td>
                                            <td>
                                                <x-table-icon hours="{{$emp->hours_worked}}"/> {{$emp->hours_worked}}
                                            </td>
                                            <td>
                                                {{$emp->hourly_rate}}
                                            </td>
                                            <td>
                                                <x-table-icon hours="{{$emp->hours_worked}}"/> {{$emp->basic_pay}}
                                            </td>
                                            <td>
                                                <x-table-icon hours="{{$emp->hours_worked}}"/>  {{$emp->overtime_pay}}
                                            </td>
                                            <td>
                                                {{$emp->gross_pay}}
                                            </td>
                                            <td>
                                                {{$emp->tax}}
                                            </td>
                                            <td>
                                                {{$emp->net_pay}}
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item " href="/employees/{{ $emp->id }}/edit">Edit</a>
                                                        <form method="POST" action="/employees/{{$emp->id}}">
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

                    </div>
                    {{$employees->links()}}
                </div>
            </div>
            {{-- End of Employee Table --}}
            <x-structure.footer />
        </section>
    </main>

</x-structure.layout>
