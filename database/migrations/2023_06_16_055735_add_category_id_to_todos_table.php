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
        Schema::table('todos', function (Blueprint $table) {

            // Podemos crear un campo por si anteriormente se nos habia olvidado:
            $table->bigInteger('category_id')->unsigned()->nullable();

            // Asignación de la llave foránea
            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todos', function (Blueprint $table) {
            //
        });
    }
};
