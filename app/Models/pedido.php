<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    protected $primaryKey = 'id_pedido';
    protected $fillable = ['nomedestinatario', 'telefonedestinatario', 'enderecodestinatario', 'rastreamento', 'status', 'id_users'];
}
