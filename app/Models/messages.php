<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $primaryKey = 'id_messages';
    protected $fillable = ['namemessages', 'emailmessages', 'textmessages'];
}
