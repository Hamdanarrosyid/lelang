<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->date('auction_date');
            $table->unsignedBigInteger('goods_id');
//            $table->unsignedBigInteger('user_id');
            $table->enum('status',['opened','closed'])->default('closed');
            $table->foreign('goods_id')->on('goods')->references('id');
            $table->decimal('final_price',65);
//            $table->foreign('user_id')->on('users')->references('id');
            $table->timestamps();
        });


//        Schema::table('auth_histories',function (Blueprint $table){
//            $table->foreign('item_id')->on('auction_items')->references('id')->
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
}
