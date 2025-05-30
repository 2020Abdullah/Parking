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
        Schema::create('graches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('places_available');
            $table->string('addresss')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            $table->text('Notes')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graches');
    }
};
