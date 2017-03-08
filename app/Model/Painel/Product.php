<?php

namespace App\Model\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','number','active','category','description'
    ];
}
