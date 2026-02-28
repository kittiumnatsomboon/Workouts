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
        Schema::create('exerciseday', function (Blueprint $table) {
            $table->id('dayid');
            $table->date('dateexercises');
            $table->string('shortnote');
            $table->enum('status',['resolve','pending','cancel','close','stop']);            
            $table->timestamps();
            $table->foreignId('exercises_id')
            ->constrained('exercises')
            ->cascadeOnDelete()
            ->noActionOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exerciseday');
    }
};
