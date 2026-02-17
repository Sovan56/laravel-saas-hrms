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
        Schema::create('leaves', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('company_id');
        $table->unsignedBigInteger('employee_id');

        $table->string('leave_type', 50);
        $table->date('start_date');
        $table->date('end_date');

        $table->text('reason')->nullable();

        $table->enum('status', ['pending', 'approved', 'rejected'])
            ->default('pending');

        $table->timestamps();

        $table->index(['employee_id', 'start_date', 'end_date']);
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
