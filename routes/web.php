<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PhonesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AmaliyotCantroller;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return redirect()->back();
});

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('phones', PhonesController::class);
    Route::resource('users', UsersController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('posts', PostsController::class);
    Route::resource('language', LanguageController::class);
    Route::resource('amaliyot', AmaliyotCantroller::class);
    Route::get('search', [AmaliyotCantroller::class, 'search'])->name('amaliyot.search');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'test'])->name('dashboard');

require __DIR__.'/auth.php';
