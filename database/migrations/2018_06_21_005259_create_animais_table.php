<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('nome', 50);
			$table->char('sexo');
			$table->string('especie', 100);
			$table->string('raca', 50);
			$table->string('nome_veterinario', 50);
			$table->string('id_veterinario', 50);
			$table->string('idade', 50);
			$table->string('altura', 50);
			$table->string('largura', 50);
			$table->string('comprimento', 50);
			$table->string('alimentacao', 50);
			$table->string('saude', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');
    }
}
