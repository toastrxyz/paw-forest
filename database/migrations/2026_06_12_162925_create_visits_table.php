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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->text('comment')->nullable();
            $table->string('status', 30)->nullable();
            $table->foreignId('user_id')->constrained('user');
            $table->foreignId('employee_id')->nullable()->constrained('employees');
            $table->foreignId('animal_id')->constrained('animals');
            $table->foreignId('location_id')->constrained('locations');
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
