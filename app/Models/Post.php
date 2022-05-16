<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'user_id',
    ];
    //MODELS Agregamos una relacion entre la tabla posts y users?
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
