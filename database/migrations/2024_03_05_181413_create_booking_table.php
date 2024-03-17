<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('booking', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_restaurante'); // FK a la tabla restaurante
        $table->foreign('id_restaurante')->references('id')->on('restaurante');
        $table->string('name');
        $table->string('lastname');
        $table->string('email');
        $table->date('date'); // Tipo fecha
        $table->time('hour'); // Tipo hora
        $table->integer('num_person'); // Tipo integer
        $table->timestamps(); // Campos created_at y updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
