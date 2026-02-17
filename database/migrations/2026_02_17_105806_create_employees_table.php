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
        Schema::create('employees', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('company_id');
        $table->string('employee_code', 50)->index();
        $table->string('name', 150);
        $table->string('email', 150);
        $table->string('image', 150)->nullable();
        $table->string('department', 100);
        $table->date('date_of_joining');
        $table->enum('status', ['active', 'inactive'])->default('active');

        $table->timestamps();

        $table->unique(['company_id', 'email']);
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
