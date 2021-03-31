<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $table = 'goods';
    protected $primaryKey = 'id';
    protected $attributes =[
        'goods_name' => '',
        'initial_price' => 0,
        'descriptions' => '',
    ];
}
