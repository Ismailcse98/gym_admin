<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialityController;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ActionTopController;
use App\Http\Controllers\ActionBottomController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\GetTouchController;




Route::get('/about',[CommonController::class,'Aboutdata']);
Route::get('/general',[CommonController::class,'Generaldata']);
Route::get('/membership',[CommonController::class,'Membershipdata']);
Route::get('/push',[CommonController::class,'Pushdata']);

Route::get('/banner',[BannerController::class,'Bannerdata']);
Route::get('/action-top',[ActionTopController::class,'ActionTopData']);
Route::get('/action-bottom',[ActionBottomController::class,'ActionBottomData']);
Route::get('/trainer-info',[TrainerController::class,'TrainerInfo']);
Route::get('/gallery',[GalleryController::class,'GalleryData']);
Route::get('/opinion',[OpinionController::class,'OpinionData']);
Route::get('/category',[CategoryController::class,'CategoryData']);
Route::get('/blog',[BlogController::class,'BlogData']);
Route::get('/blog-details/{id}',[BlogController::class,'BlogDetails']);
Route::get('/packages',[PackageController::class,'PackagesData']);
Route::get('/gettouch',[GetTouchController::class,'GetTouchData']);

// Store Message
Route::post('/store_message',[CommonController::class,'StoreMessage'])->name('store_message');