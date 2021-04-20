<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AuctionHistory extends Model
{
    use HasFactory;

    protected $table = 'auction_histories';
    protected $primaryKey = 'id';
    protected $fillable=['auction_id','user_id','user_bid'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'auction_user','auction_id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function auctions()
    {
        return $this->belongsTo(Auction::class);
    }
}
