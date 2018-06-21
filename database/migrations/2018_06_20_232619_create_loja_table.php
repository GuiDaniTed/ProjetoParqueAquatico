<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loja', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('nome', 50);
			$table->string('id_gerente', 50);
			$table->string('caixa1', 50);
			$table->string('id_caixa1', 50);
			$table->string('caixa2', 50);
			$table->string('id_caixa2', 50);
			$table->string('cozinheiro1', 100);
			$table->string('id_cozinheiro1', 50);
			$table->string('cozinheiro2', 100);
			$table->string('id_cozinheiro2', 50);
			$table->string('produto1', 100);
			$table->double('preco1', 100);
			$table->string('produto2', 100);
			$table->double('preco2', 100);
			$table->string('produto3', 100);
			$table->double('preco3', 100);
			$table->string('produto4', 100);
			$table->double('preco4', 100);
			$table->string('produto5', 100);
			$table->double('preco5', 100);
			$table->string('produto6', 100);
			$table->double('preco6', 100);
			$table->string('produto7', 100);
			$table->double('preco7', 100);
			$table->string('produto8', 100);
			$table->double('preco8', 100);
			$table->string('produto9', 100);
			$table->double('preco9', 100);
			$table->string('produto10', 100);
			$table->double('preco10', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loja');
    }
}
