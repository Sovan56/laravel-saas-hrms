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
        Schema::create('attendances', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('company_id');
        $table->unsignedBigInteger('employee_id');

        $table->date('attendance_date');
        $table->time('clock_in')->nullable();
        $table->time('clock_out')->nullable();

        $table->integer('working_minutes')->nullable();

        $table->timestamps();

        $table->unique(['employee_id', 'attendance_date']);
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
