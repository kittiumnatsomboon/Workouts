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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->string('rooms_name');
            $table->longtext('rooms_number');
            $table->string('room_type');
            $table->string('price_water');
            $table->string('price_fire');
            $table->string('furniture');
            $table->foreignId('apart_id')
            ->references('apartment_id')
            ->on('apartment')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
