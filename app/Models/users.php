<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id_users';
    protected $fillable = ['nomecompleto', 'telefone', 'endereco', 'cpf', 'datanascimento', 'senha', 'email', 'tipo'];
}
