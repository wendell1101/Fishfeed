<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;

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

Route::group(['prefix' => '/admin', 'middleware' => []], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Route::resource('categories', CategoryController::class);
});

Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('update_profile');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/ponds_info', function(){
    return view('ponds_info');
})->name('ponds_info');

Route::get('/round_fish_pond', function(){
    return view('round_fish_pond');
})->name('round_fish_pond');

Route::get('/rectangular_fish_pond', function(){
    return view('rectangular_fish_pond');
})->name('rectangular_fish_pond');

Route::get('/calculation', function(){
    return view('calculation');
})->name('calculation');

Route::get('/fish_ponds', function(){
    return view('fish_ponds');
})->name('fish_ponds');

Route::get('/fish_reproduction', function(){
    return view('fish_reproduction');
})->name('fish_reproduction');

Route::get('/profile', function(){
    return view('profile');
})->name('profile')->middleware('auth');
