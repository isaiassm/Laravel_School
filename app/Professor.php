<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['name', 'idade', 'materia', 'telefone', 'cpf', 'cep', 'sexo', 'created_at', 'updated_at'];
}
