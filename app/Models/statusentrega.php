<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusentrega extends Model
{
    use HasFactory;
    protected $table = 'statusentrega';
    protected $primaryKey = 'id_statusentrega';
    protected $fillable = ['datahorapostado', 'datahoraentrega', 'codigorastreio', 'id_pedido'];
}
