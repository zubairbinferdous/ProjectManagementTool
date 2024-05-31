<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Employee extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function projectData()
    {
        return $this->hasOne(Project::class, "id", "project_id");
    }
}
