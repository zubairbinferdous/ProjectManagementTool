<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employeeData()
    {
        return $this->hasOne(Employee::class, "id", "employees_id");
    }
}
