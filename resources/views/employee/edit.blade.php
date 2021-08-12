<x-structure.layout>
    <x-structure.sidenav class="sidenav" />

    <main class="main-content" id="panel">
        <x-structure.topnav/>
        <x-structure.header label="Update Record" />

        {{-- Form Container Start Can't Separate into a Component. Structure Changes--}}
        <div class="container mt--6">
            <div class="row justify-content-center">
                <div class=" col ">
                    <div class="card">
                        <div class="card-header bg-transparent">
                            <h3 class="mb-0">Edit: {{$employee->first_name}} {{$employee->last_name}}</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/employees/{{ $employee->id }}">
                                @csrf
                                @method('PATCH')
                                <x-forms.input name="first_name" text="First Name" :value="old('first_name',$employee->first_name)" />
                                <x-forms.input name="last_name" text="Last Name" :value="old('last_name',$employee->last_name)" />
                                <x-forms.input name="hours_worked" text="Hours Worked" type="number" :value="old('hours_worked',$employee->hours_worked)"/>
                                <x-forms.input name="hourly_rate" text="Hourly Rate" :value="old('hourly_rate',$employee->hourly_rate)"/>

                                <div class="form-group">
                                    <label for="department_id">Department</label>
                                    <select class="form-control" name="department_id" id="department_id">
                                        <option selected disabled>Select a Department</option>
                                        @foreach (\App\Models\Department::all() as $department)
                                            <option
                                                value="{{ $department->id }}"
                                                {{ old('department_id', $employee->department_id) == $department->id ? 'selected' : '' }}
                                            >{{ ucwords($department->name) }}</option>
                                        @endforeach
                                    </select>
                                    <x-forms.error name="department_id" />
                                </div>
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
