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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->text('method_of_use')->nullable();
            $table->string('frequency', 100)->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_until')->nullable();
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('animal_id')->constrained('animals');
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
