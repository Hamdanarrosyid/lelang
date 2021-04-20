<?php

use App\Http\Controllers\AuctionsController;
use App\Http\Controllers\AuctionItemsController;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
})->middleware('auth')->name('home');

Route::resource('/goods', GoodsController::class)->middleware('auth');
Route::resource('/auction_items', AuctionItemsController::class)->middleware('auth');
Route::resource('/bidding', BiddingController::class)->middleware('auth')->except('store');
Route::patch('/bidding/store/{id}',[BiddingController::class,'store'])->middleware('auth')->name('bidding.store');
Route::resource('/reports', ReportsController::class)->middleware('auth');
