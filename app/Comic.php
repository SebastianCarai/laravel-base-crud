<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'series',
        'price',
        'sale_date',
        'thumb',
        'token'
    ];
}
