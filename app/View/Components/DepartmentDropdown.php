<?php

namespace App\View\Components;

use App\Models\Department;
use Illuminate\View\Component;

class DepartmentDropdown extends Component
{

    public function render()
    {
        return view('components.department-dropdown', [
            'departments' => Department::all(),
            'currentDepartment' => Department::firstwhere('slug' ,request('department'))
        ]);
    }
}
