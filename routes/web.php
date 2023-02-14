<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register w eb routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, '__invoke']);
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, '__invoke'])->name('admin.index');
    });
    Route::group(['namespace' => 'Category', 'prefix'=>'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.categories.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.categories.create');
        Route::post('/', [\App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.categories.store');
        Route::get('{category}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('admin.categories.edit');
        Route::patch('{category}', [\App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('admin.categories.update');
        Route::delete('{category}', [\App\Http\Controllers\Admin\Category\DestroyController::class, '__invoke'])->name('admin.categories.destroy');
    });

    Route::group(['namespace' => 'Tag','prefix'=>'tags'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Tag\IndexController::class, '__invoke'])->name('admin.tags.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Tag\CreateController::class, '__invoke'])->name('admin.tags.create');
        Route::post('/', [\App\Http\Controllers\Admin\Tag\StoreController::class, '__invoke'])->name('admin.tags.store');
        Route::get('{tag}/edit', [\App\Http\Controllers\Admin\Tag\EditController::class, '__invoke'])->name('admin.tags.edit');
        Route::patch('{tag}', [\App\Http\Controllers\Admin\Tag\UpdateController::class, '__invoke'])->name('admin.tags.update');
        Route::delete('{tag}', [\App\Http\Controllers\Admin\Tag\DestroyController::class, '__invoke'])->name('admin.tags.destroy');
    });

    Route::group(['namespace' => 'Post','prefix'=>'posts'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Post\IndexController::class, '__invoke'])->name('admin.posts.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Post\CreateController::class, '__invoke'])->name('admin.posts.create');
        Route::post('/', [\App\Http\Controllers\Admin\Post\StoreController::class, '__invoke'])->name('admin.posts.store');
        Route::get('{post}/edit', [\App\Http\Controllers\Admin\Post\EditController::class, '__invoke'])->name('admin.posts.edit');
        Route::patch('{post}', [\App\Http\Controllers\Admin\Post\UpdateController::class, '__invoke'])->name('admin.posts.update');
        Route::delete('{post}', [\App\Http\Controllers\Admin\Post\DestroyController::class, '__invoke'])->name('admin.posts.destroy');
    });

    Route::group(['namespace' => 'User','prefix'=>'users'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\User\IndexController::class, '__invoke'])->name('admin.users.index');
        Route::get('/create', [\App\Http\Controllers\Admin\User\CreateController::class, '__invoke'])->name('admin.users.create');
        Route::post('/', [\App\Http\Controllers\Admin\User\StoreController::class, '__invoke'])->name('admin.users.store');
        Route::get('{user}/edit', [\App\Http\Controllers\Admin\User\EditController::class, '__invoke'])->name('admin.users.edit');
        Route::patch('{user}', [\App\Http\Controllers\Admin\User\UpdateController::class, '__invoke'])->name('admin.users.update');
        Route::delete('{user}', [\App\Http\Controllers\Admin\User\DestroyController::class, '__invoke'])->name('admin.users.destroy');
    });
});

Auth::routes();

