<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'id_product';
    protected $Fillable = [
        'name',
        'price',
        'typeproduct_at',
        'image'
    ];
}
