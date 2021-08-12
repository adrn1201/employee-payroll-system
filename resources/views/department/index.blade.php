<x-structure.layout>

    <x-structure.sidenav class="sidenav" />

    {{-- Main content --}}
    <main class="main-content" id="panel">

        <x-structure.topnav/>

        <x-structure.header label="Records"/>

        {{-- Page content --}}
        <section class="container mt--6">

            <div class="row">
                <section class="table-responsive">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Departments</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">

                                {{-- Start Department table --}}
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Slug</th>
                                            @if(auth()->user()->is_admin)
                                                <th scope="col"></th>
                                            @endif
                                        </tr>
                                    </thead>
                                    @foreach($deps as $dep)
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    {{$dep->name}}
                                                </th>
                                                <td>
                                                    {{$dep->slug}}
                                                </td>
                                                @if(auth()->user()->is_admin)
                                                    <td class="text-right">
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                <a class="dropdown-item " href="/departments/{{ $dep->id }}/edit">Edit</a>
                                                                <form method="POST" action="/departments/{{$dep->id}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="dropdown-item">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>

                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- End of Department Table --}}
            <x-structure.footer />
        </section>
    </main>

</x-structure.layout>
