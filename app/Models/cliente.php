<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nomecompleto', 'telefone', 'endereco', 'cpf', 'datanascimento', 'senha', 'email'];
}
