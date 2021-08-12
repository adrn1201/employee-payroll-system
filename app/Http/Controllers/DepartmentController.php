<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department.index', [
            'deps' => Department::paginate(15),
        ]);
    }
    public function create()
    {
        return view('department.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'slug' => ['required', Rule::unique('departments', 'slug')],
        ]);

        Department::create($attributes);

        return redirect('/department-records')->with('success', 'Department Created');
    }

    public function edit(Department $department)
    {
        return view('department.edit', ['department' => $department]);

    }

    public function update(Department $department)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'slug' => ['required', Rule::unique('departments', 'slug')->ignore($department->id)],
        ]);

        $department->update($attributes);

        return back()->with('success', 'Department Updated');
    }
    public function destroy(Department $department)
    {
        $department->delete();

        return back()->with('success', 'Department Deleted');
    }

}
