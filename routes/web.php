<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SubscriberController;

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


Route::resource('subscribers', SubscriberController::class);

//=============================Felipa route start=============================

Route::get('/', [
    'uses'          => 'App\Http\Controllers\FelipaController@index',
    'as'            => 'home',
]);

Route::get('/about', [
    'uses'          => 'App\Http\Controllers\FelipaController@about',
    'as'            => 'about'
]);

Route::get('/portfolio', [
    'uses'          => 'App\Http\Controllers\FelipaController@portfolio',
    'as'            => 'portfolio'
]);

Route::get('/blog', [
    'uses'          => 'App\Http\Controllers\FelipaController@blog',
    'as'            => 'blog'
]);

Route::get('/blog-single', [
    'uses'          => 'App\Http\Controllers\FelipaController@blogSingle',
    'as'            => 'single.blog'
]);

Route::get('/contact', [
    'uses'          => 'App\Http\Controllers\FelipaController@contact',
    'as'            => 'contact'
]);

//==============================Felipa route end==============================

//============================Dashboard route start===========================

Route::get('/dashboard', [
    'uses'          => 'App\Http\Controllers\DashboardController@index',
    'as'            => 'dashboard',
    'middleware'    => ['auth:sanctum', 'verified']
]);

//=============================Dashboard route end============================

//=============================Contact route start============================

Route::resource('mail-contact', ContactController::class);

//==============================Contact route end=============================

//===============================Blog route start==============================

Route::resource('blogs', BlogController::class);

//==============================Blog route end=============================

//==========================Subscriber route start=========================

//Route::get('/add-subscriber', [
//    'uses'          => 'App\Http\Controllers\SubscriberController@index',
//    'as'            => 'subscriber.add',
//    'middleware'    => ['auth:sanctum', 'verified']
//]);
//
//Route::get('/manage-subscriber', [
//    'uses'          => 'App\Http\Controllers\SubscriberController@manage',
//    'as'            => 'subscriber.manage',
//    'middleware'    => ['auth:sanctum', 'verified']
//]);
//
//Route::post('/new-subscriber', [
//    'uses'          => 'App\Http\Controllers\SubscriberController@create',
//    'as'            => 'subscriber.new',
//    'middleware'    => ['auth:sanctum', 'verified']
//]);
//
//Route::get('/edit-subscriber/{id}', [
//    'uses'          => 'App\Http\Controllers\SubscriberController@edit',
//    'as'            => 'subscriber.edit',
//    'middleware'    => ['auth:sanctum', 'verified']
//]);
//
//Route::post('/update-subscriber/{id}', [
//    'uses'          => 'App\Http\Controllers\SubscriberController@update',
//    'as'            => 'subscriber.update',
//    'middleware'    => ['auth:sanctum', 'verified']
//]);
//
//Route::post('/delete-subscriber/{id}', [
//    'uses'          => 'App\Http\Controllers\SubscriberController@delete',
//    'as'            => 'subscriber.delete',
//    'middleware'    => ['auth:sanctum', 'verified']
//]);

//===========================Subscriber route end==========================
