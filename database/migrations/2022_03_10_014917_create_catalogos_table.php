<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('codigos');

        Schema::create('codigos', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Codigo');
            $table->string('Asentamiento');
            $table->string('Tipo_Asenta');
            $table->string('Municipio');
            $table->string('Estado');
            $table->string('Ciudad');
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
        
    }
};
