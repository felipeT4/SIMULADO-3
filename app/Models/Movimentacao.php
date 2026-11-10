<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    protected $fillable = [
    'id_produto',
    'id_fornecedor',    
    'tipo',
    'valor_uni',
    'quantidade',
    'data',
    'responsavel'

    ];
}
