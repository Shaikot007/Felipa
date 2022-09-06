<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Front\FelipaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\ContactController;

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

Route::get('/', [FelipaController::class, 'index'])->name('home');
Route::get('/about', [FelipaController::class, 'about'])->name('about');
Route::get('/portfolio', [FelipaController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [FelipaController::class, 'blog'])->name('blog');
Route::get('/blog-single', [FelipaController::class, 'blogSingle'])->name('single.blog');
Route::get('/contact', [FelipaController::class, 'contact'])->name('contact');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('subscribers', SubscriberController::class);
    Route::resource('mail-contact', ContactController::class);
});
