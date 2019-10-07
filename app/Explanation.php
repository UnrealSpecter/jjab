<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'video'];
}
