<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeRecordController extends Controller
{
    public function index()
    {
        return view('emp.index', [
            'lists' => Employee::paginate(15)
        ]);
    }
}
