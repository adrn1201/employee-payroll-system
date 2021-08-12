<?php

namespace App\Http\Controllers;

use App\Classes\ComputeBusinessLogic;
use App\Http\Requests\CommitRequest;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::paginate(15),
        ]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store()
    {
        $attributes = (new CommitRequest())->values();

        $attributes['user_id'] = auth()->id();

        Employee::create($attributes);

        return redirect('/employee-records')->with('success', 'Employee Created');
    }

    public function edit(Employee $employee)
    {
      return view('employee.edit', ['employee' => $employee]);

    }

    public function update(Employee $employee)
    {
        $attributes = (new CommitRequest())->values();

        $employee->update($attributes);

        return back()->with('success', 'Employee Updated');
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back()->with('success', 'Employee Deleted');
    }
}
