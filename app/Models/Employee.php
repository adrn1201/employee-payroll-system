<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $with = ['department', 'user'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query)=>
                $query->where('first_name', 'like', '%' . $search . '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
            )
        );


        $query->when($filters['department'] ?? false, fn($query, $department) =>
            $query->whereHas('department',  fn($query) =>
                $query->where('name', $department)

            )
        );

        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user',  fn($query) =>
                $query->where('name', $user)

            )
        );
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
