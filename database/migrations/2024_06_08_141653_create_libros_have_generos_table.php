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
        Schema::create('libros_have_generos', function (Blueprint $table) {

            $table->unsignedBigInteger('libro_fk');
            $table->foreign('libro_fk')->references('id')->on('libros');

            $table->unsignedSmallInteger('genero_fk');
            $table->foreign('genero_fk')->references('genero_id')->on('generos');

            $table->primary(['libro_fk', 'genero_fk']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros_have_generos');
    }
};
