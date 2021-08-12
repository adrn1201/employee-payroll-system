<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'employees' => Employee::paginate(15),
            'deps' => Department::paginate(15),
        ]);
    }
}
