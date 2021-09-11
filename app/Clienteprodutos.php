<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clienteprodutos extends Model
{
    protected $fillable = ['id', 'titulo', 'descricao', 'valor', 'quantidade'];

}
