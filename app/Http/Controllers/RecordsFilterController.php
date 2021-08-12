<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class RecordsFilterController extends Controller
{
    public function index()
    {
        return view('filtered.index', [
            'employees' => Employee::latest()->filter(
                request(['search', 'department', 'user'])
            )->paginate(6)->withQueryString(),
        ]);
    }

}
