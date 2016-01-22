<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = 'cadastro_pacientes';
    protected $guarded = [];
    protected $timetamps = false;
    protected $fillable = [
    	'id',
        'tb_nome',
        'tb_email',
        'tb_data_nascimento',
        'tb_pais',
        'tb_estado',
        'tb_cidade',
        'tb_bairro',
        'tb_endereco',
        'tb_cpf',
        'tb_rg',
        'updated_at',
        'created_at',
    ];

}