<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class RecordsFilterController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::latest()->filter(
                request(['search', 'department', 'user'])
            )->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Employee $employees)
    {
        return view('kakaindex', [
            'employee'=> $employees
        ]);
    }
}
