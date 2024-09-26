<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =[
        'content',
        'post_c_s_id'
    ];

    public function postC(){
        return $this->belongsTo(PostC::class, 'post_c_s_id', 'id');
    }
}
