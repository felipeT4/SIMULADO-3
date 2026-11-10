<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    use HasFactory;
    protected $fillable = [

    'id_categoria',
    'id_fornecedor',
    'nome',
    'descricao',
    'marca',
    'categoria',
    'p_custo',
    'p_venda'

    ];
      
}
