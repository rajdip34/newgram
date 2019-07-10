<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    //post
    public function user(){

        return $this->belongsTo(User::class);
    }
}
