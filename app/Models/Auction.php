<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Auction extends Model
{
    use HasFactory;

    protected $table = 'auctions';
    protected $primaryKey = 'id';
    protected $attributes =[
        'status' => ['opened','closed'],
    ];

    public function goods(): BelongsTo
    {
        return $this->belongsTo(Goods::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
