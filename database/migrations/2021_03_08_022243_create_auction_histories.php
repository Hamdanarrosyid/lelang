<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('goods');
            $table->unsignedBigInteger('auction_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('user_bid',65);
            $table->foreign('goods')->on('goods')->references('id');
            $table->foreign('auction_id')->on('auctions')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
            $table->timestamps();
        });

//        Schema::table('auth_histories',function (Blueprint $table){
//            $table->foreign('goods')->on('ite')
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auction_histories');
    }
}
