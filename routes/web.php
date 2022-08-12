<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class,'Dashboard'])->name('home');

// Message Table
Route::get('/list_message',[CommonController::class,'Message'])->name('list_message');


// General Table
Route::get('/general',[CommonController::class,'General'])->name('general_add');
Route::put('/general_update/{id}',[CommonController::class,'GeneralUpdate'])->name('general_update');

// About Table
Route::get('/add_about',[CommonController::class,'Add_about'])->name('add_about');
Route::put('/update_about/{id}',[CommonController::class,'Update_about'])->name('update_about');

// Membership Table
Route::get('/add_membership',[CommonController::class,'Add_membership'])->name('add_membership');
Route::put('/update_membership/{id}',[CommonController::class,'Update_membership'])->name('update_membership');

// Push Table
Route::get('/add_push',[CommonController::class,'Add_push'])->name('add_push');
Route::put('/update_push/{id}',[CommonController::class,'Update_push'])->name('update_push');

//Banner Table
Route::get('/list_banner',[BannerController::class,'index'])->name('list_banner');
Route::get('/add_banner',[BannerController::class,'create'])->name('add_banner');
Route::post('/store_banner',[BannerController::class,'store'])->name('store_banner');

//Action Top
Route::get('/list_action_top',[ActionTopController::class,'index'])->name('list_action_top');
Route::get('/add_action_top',[ActionTopController::class,'create'])->name('add_action_top');
Route::post('/store_action_top',[ActionTopController::class,'store'])->name('store_action_top');

//Action bottom
Route::get('/list_action_bottom',[ActionBottomController::class,'index'])->name('list_action_bottom');
Route::get('/add_action_bottom',[ActionBottomController::class,'create'])->name('add_action_bottom');
Route::post('/store_action_bottom',[ActionBottomController::class,'store'])->name('store_action_bottom');

//Trainers Information
Route::get('/list_trainers',[TrainerController::class,'index'])->name('list_trainers');
Route::get('/add_trainers',[TrainerController::class,'create'])->name('add_trainers');
Route::post('/store_trainers',[TrainerController::class,'store'])->name('store_trainers');

//Gallery Information
Route::get('/list_gallery',[GalleryController::class,'index'])->name('list_gallery');
Route::get('/add_gallery',[GalleryController::class,'create'])->name('add_gallery');
Route::post('/store_gallery',[GalleryController::class,'store'])->name('store_gallery');

//Opinion Information
Route::get('/list_opinion',[OpinionController::class,'index'])->name('list_opinion');
Route::get('/add_opinion',[OpinionController::class,'create'])->name('add_opinion');
Route::post('/store_opinion',[OpinionController::class,'store'])->name('store_opinion');

//Category Information
Route::get('/list_category',[CategoryController::class,'index'])->name('list_category');
Route::get('/add_category',[CategoryController::class,'create'])->name('add_category');
Route::post('/store_category',[CategoryController::class,'store'])->name('store_category');

//Blog Information
Route::get('/list_blog',[BlogController::class,'index'])->name('list_blog');
Route::get('/add_blog',[BlogController::class,'create'])->name('add_blog');
Route::post('/store_blog',[BlogController::class,'store'])->name('store_blog');

//Package Information
Route::get('/list_package',[PackageController::class,'index'])->name('list_package');
Route::get('/add_package',[PackageController::class,'create'])->name('add_package');
Route::post('/store_package',[PackageController::class,'store'])->name('store_package');

//Get Touch Information
Route::get('/list_touch',[GetTouchController::class,'index'])->name('list_touch');
Route::get('/add_touch',[GetTouchController::class,'create'])->name('add_touch');
Route::post('/store_touch',[GetTouchController::class,'store'])->name('store_touch');



Auth::routes();



