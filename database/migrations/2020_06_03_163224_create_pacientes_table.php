<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->string('nome');
            $table->string('rg');
            $table->string('cartao_sus');
            $table->string('sexo');            
            $table->date('nascimento');
            $table->string('nome_mae');
            $table->string('telefone');
            $table->integer('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->integer('quadra');
            $table->integer('lote');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');            
            $table->char('uf', 2);
            //$table->string('foto');                        
            $table->softDeletes('deleted_at', 0);
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
        Schema::dropIfExists('pacientes');
    }
}
