<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'user_id'];

    //RELACIÓN INVERSA. Toma la llave foranea para buscarla en la tabla princiapl
    public function user(){
        return $this->belongsTo(User::class);
    }
}
