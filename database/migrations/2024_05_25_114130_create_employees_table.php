<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;
use App\Models\Employee;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('EmployeeName');
            $table->string('FatherName');
            $table->string('profilePic');
            $table->date('DateOfBirth');
            $table->date('ActualJoinedDate');
            $table->string('BirthPlace');
            $table->string('PhoneNumber');
            $table->date('JoiningDate');
            $table->string('NidNumber');
            $table->string('Designation');
            $table->integer('Salary');
            $table->string('Divisions');
            $table->string('Districts');
            $table->string('Upazilas');
            $table->string('pdf_one');
            $table->string('pdf_two');
            $table->string('pdf_three');
            $table->string('Account');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
