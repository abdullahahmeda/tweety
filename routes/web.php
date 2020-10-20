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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::get('/tweets', [\App\Http\Controllers\TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [\App\Http\Controllers\TweetController::class, 'store']);
    Route::post('/tweets/upload', [\App\Http\Controllers\TweetController::class, 'upload']);

    Route::post('/@{user}/follow', [\App\Http\Controllers\FollowsController::class, 'store'])->name('follow');
    
    Route::get('/@{user}/edit', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit')->middleware('can:edit,user');
    Route::patch('/@{user}', [\App\Http\Controllers\ProfileController::class, 'update'])->middleware('can:edit,user');

    Route::get('/explore', [\App\Http\Controllers\ExploreController::class, 'index'])->name('explore');

});

Route::get('/@{user}', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile');

Auth::routes();