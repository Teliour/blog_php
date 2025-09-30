<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    
    protected $primaryKey = 'post_id';

    
    protected $fillable = [
        'author_id',
        'title',
        'excerpt',
        'image',
        'body',
    ];
    
   

   
    public function author()
    {
       return $this->belongsTo(\App\Models\User::class, 'author_id');
    }
}
