<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['name', 'idade', 'telefone', 'cpf', 'cep', 'sexo'];
    public $timestamps = false;
    
}
