<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('ProjectName');
            $table->string('ProjectDirector');
            $table->integer('ProjectNumber');
            $table->string('ProjectValue');
            $table->date('ProjectStart');
            $table->longText('ProjectDescription');
            $table->string('StaffName');
            $table->string('StaffNumber');
            $table->string('ProjectDivisions');
            $table->string('ProjectDistricts');
            $table->string('ProjectUpazilas')->nullable();
            $table->string('TotalCapacity');
            $table->string('CurrentWorking');
            $table->string('status');
            $table->integer('role')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
