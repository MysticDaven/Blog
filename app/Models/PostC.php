<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostC extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'post_c_s_id', 'id');
    }
}
