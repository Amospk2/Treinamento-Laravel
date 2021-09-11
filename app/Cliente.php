<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['id', 'nome', 'email', 'password', 'endereco', 'Date', 'CPF', 'RG', 'Fone', 'Genero'];

}
