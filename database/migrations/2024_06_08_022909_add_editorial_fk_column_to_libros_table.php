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
        Schema::table('libros', function (Blueprint $table) {
            //Creamos la columna en la tabla libro
            $table->unsignedTinyInteger('editorial_fk');

            //Definimos la referencia a la tabla editorials
            $table->foreign('editorial_fk')->references('editorial_id')->on('editorials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            //Se elimina la columna en la tabla libros
            $table->dropColumn('editorial_fk');
        });
    }
};
