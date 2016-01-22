<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCadastroClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tb_nome');
            $table->date('tb_data_nascimento');
            $table->string('tb_email')->uniqid();
            $table->string('tb_endereco');
            $table->string('tb_bairro');
            $table->string('tb_cidade');
            $table->string('tb_estado');          
            $table->string('tb_pais');          
            $table->string('tb_cpf',15);          
            $table->string('tb_rg',15);  
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
        Schema::drop('cadastro_pacientes');
    }
}
