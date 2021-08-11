@foreach (\App\Models\Department::all() as $department)
    <option
        value="{{ $department->id }}"
        {{ old('department_id') == $department->id ? 'selected' : '' }}
    >{{ isset($currentDepartment) ? ucwords($department->name) : 'Departments' }}</option>
@endforeach
