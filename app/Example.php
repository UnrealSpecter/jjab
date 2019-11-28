<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $fillable = ['question'];

    /**
    * Get the comments for the blog post.
    */
   public function explanation()
   {
       return $this->belongsTo('App\Explanation');
   }

}
