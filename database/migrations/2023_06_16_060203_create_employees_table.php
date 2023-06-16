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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable();
            $table->string('full_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('department')->nullable();
            $table->string('business_unit')->nullable();
            $table->string('gender')->nullable();
            $table->string('ethnicity')->nullable();
            $table->bigInteger('age')->nullable()->default(12);
            $table->string('hire_date')->nullable();
            $table->string('annual_salary')->nullable();
            $table->bigInteger('bonus')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('exit_date')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
