<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('socios', function (Blueprint $table){
		$table->increments('id');
            $table->timestamps();
			$table->string('nome', 100);
			$table->char('sexo');
			$table->date('dataNascimento');
			$table->string('cpf', 28)->unique();
			$table->string('rg', 24)->unique();
			$table->string('comprovantederesidencia', 30);
			$table->string('rua', 100);
			$table->string('numero', 10);
			$table->string('complemento', 100)->nullable($value = true);
			$table->string('bairro', 100);
			$table->string('cidade', 100);
			$table->string('estado', 4);
			$table->string('telefone', 30)->unique();
			$table->string('email', 40);
			$table->string('contaBancaria', 30);
			$table->string('comprovantederenda', 30);
		});
			
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
