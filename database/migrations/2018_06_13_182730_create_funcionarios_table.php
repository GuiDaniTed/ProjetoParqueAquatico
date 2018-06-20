<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome', 100);
			$table->char('sexo');
			$table->date('dataNascimento');
			$table->string('cpf', 28)->unique();
			$table->string('rua', 100);
			$table->string('numero', 10);
			$table->string('complemento', 100)->nullable($value = true);
			$table->string('bairro', 100);
			$table->string('cidade', 100);
			$table->string('estado', 4);
			$table->string('telefone', 30)->unique();
			$table->string('email', 40);
			$table->string('cargo', 50);
			$table->string('salario', 10);
			$table->string('contaBancaria', 30);
			$table->string('jornadaEntrada', 5);
			$table->string('jornadaSaida', 5);
			$table->string('NumeroCarteiraTrab', 12)->unique();
			$table->string('NumeroSerieCTrab', 10)->unique();
			$table->string('CRMV', 18)->unique();
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
        Schema::dropIfExists('funcionarios');
    }
}
