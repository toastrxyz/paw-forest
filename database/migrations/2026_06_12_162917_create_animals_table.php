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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_added')->useCurrent();
            $table->string('name', 100);
            $table->string('health_status')->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('species', 100)->nullable();
            $table->string('breed', 100)->nullable();
            $table->integer('age')->nullable();
            $table->foreignId('location_id')->constrained('locations');
            $table->string('image')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
