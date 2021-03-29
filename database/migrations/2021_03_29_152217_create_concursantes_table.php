<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcursantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concursantes', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('documento')->unique();
            $table->text('ciudad');
            $table->text('correo');
            $table->text('celular');
            $table->timestamp('inscripcion')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concursantes');
    }
}
