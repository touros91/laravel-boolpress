<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'slug', 'category_id'];
    
    public function category() {
        return $this->belongsTo('App\Category');
    }
}

