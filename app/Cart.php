<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [ 
        'title',
        'content',
        'price',
        'place',
        'image',
    ];
}
