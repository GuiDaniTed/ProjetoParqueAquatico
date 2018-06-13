<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome', 100);
			$table->char('sexo');
			$table->string('email', 40);
			$table->date('dataNascimento');
			$table->string('cpf', 28)->unique();
			$table->string('rua', 100);
			$table->string('numero', 10);
			$table->string('complemento', 100)->nullable($value = true);
			$table->string('bairro', 100);
			$table->string('cidade', 100);
			$table->string('estado', 4);
			$table->string('telefone', 30)->unique();
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
        Schema::dropIfExists('usuarios');
    }
}
