<?php

use Illuminate\Support\Facades\Route;

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
require 'admin.php';


Route::group([
    'prefix' => '/',
], function () {
    Route::get('/', \App\Http\Controllers\Pages\HomeController::class)->name('home');
    Route::get('home', \App\Http\Controllers\Pages\HomeController::class)->name('home');

    //About
    Route::get('about', \App\Http\Controllers\Pages\AboutController::class)->name('about');

    //service
    Route::get('service', \App\Http\Controllers\Pages\ServiceController::class)->name('service');

    //Team
    Route::get('team', \App\Http\Controllers\Pages\TeamController::class)->name('team');

    //Portfolio
    Route::get('portfolio', [\App\Http\Controllers\Pages\PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('portfolio/details', [\App\Http\Controllers\Pages\PortfolioController::class, 'show'])->name('portfolio.show');

    //Posts
    Route::get('blog', [\App\Http\Controllers\Pages\PostController::class, 'index'])->name('blog.index');
    Route::get('blog/details/{post}', [\App\Http\Controllers\Pages\PostController::class, 'show'])->name('blog.show');

    //Contact
    Route::get('contact', \App\Http\Controllers\Pages\ContactController::class)->name('contact');

    //Tags
    Route::get('tags/{tag}', [\App\Http\Controllers\Pages\TagController::class, 'show'])->name('tags.show');

});

require __DIR__.'/auth.php';
