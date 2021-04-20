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
    protected $fillable=['goods_id','auction_date','status','final_price'];

    public function goods(): BelongsTo
    {
        return $this->belongsTo(Goods::class);
    }

    public function auctionHistories()
    {
        return $this->hasMany(AuctionHistory::class);
    }

}
