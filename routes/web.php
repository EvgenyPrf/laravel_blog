<?php

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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, '__invoke'])->name('admin.index');
    });
    Route::group(['prefix'=>'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.categories.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.categories.create');
        Route::post('/', [\App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.categories.store');
        Route::get('{id}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('admin.categories.edit');
        Route::patch('{id}', [\App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('admin.categories.update');
        Route::delete('{id}', [\App\Http\Controllers\Admin\Category\DestroyController::class, '__invoke'])->name('admin.categories.destroy');
    });
});

Auth::routes();

