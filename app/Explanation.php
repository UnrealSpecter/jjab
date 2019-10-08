<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'video'];

    /**
    * Get the comments for the blog post.
    */
   public function examples()
   {
       return $this->hasMany('App\Example');
   }

}
