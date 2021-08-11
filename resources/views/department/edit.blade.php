<x-structure.layout>
    <x-structure.sidenav class="sidenav"  />

    <main class="main-content" id="panel">
        <x-structure.topnav/>
        <x-structure.header label="Update Record" />

        {{-- Form Container Start Can't Separate into a Component. Structure Changes--}}
        <div class="container mt--6">
            <div class="row justify-content-center">
                <div class=" col ">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <h3 class="mb-0">Edit: {{$department->name}}</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/departments/{{ $department->id }}">
                                @csrf
                                @method('PATCH')
                                <x-forms.input name="name" text="Department Name" :value="old('department',$department->name)" />
                                <x-forms.input name="slug" text="Slug" :value="old('slug',$department->slug)" />

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mx-auto text-center">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <x-structure.footer />
        </div>
        {{-- End Container --}}
    </main>
</x-structure.layout>
