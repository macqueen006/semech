<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;


Route::group([
    'as' => 'admin.',
    'middleware' => ['auth', 'admin', 'verified']
], function () {

    Route::get('admin', [DashboardController::class, 'index'])->name('index');

    //Profile
    Route::resource('admin/profile', ProfileController::class);

    //Permissions
    Route::resource('admin/permissions', PermissionController::class);

    // Users
    Route::resource('admin/users', UserController::class);

    // Comments
    Route::resource('admin/comments', CommentController::class);

    // Posts
    Route::resource('admin/posts', PostController::class);

    // Roles
    Route::resource('admin/roles', RoleController::class);

    // Settings
    Route::resource('admin/settings', SettingController::class);

    // tags
    Route::resource('admin/tags', TagController::class);

});
