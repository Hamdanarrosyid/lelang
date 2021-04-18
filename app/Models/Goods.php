<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $table = 'goods';
    protected $primaryKey = 'id';
    protected $fillable = ['goods_name','goods_date','initial_price','descriptions'];
    protected $attributes =[
        'goods_name' => '',
        'initial_price' => 0,
        'descriptions' => '',
    ];
}
