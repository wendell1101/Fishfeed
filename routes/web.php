<?php

use App\Models\Pond;
use App\Models\CalculationHistory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PondsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\FeedsInfoController;
use App\Http\Controllers\PondsInfoController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CalculationHistoryController;
use App\Http\Controllers\FeedCalculationHistoryController;
use App\Http\Controllers\AdminCalculationHistoryController;
use App\Http\Controllers\MonitoringController;

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

Route::group(['prefix' => '/admin', 'middleware' => ['auth','is_admin']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('users', AdminUserController::class);
    Route::get('users-delete/{user}', [AdminUserController::class, 'delete'])->name('admin.users.delete');

    Route::resource('ponds', PondsController::class);
    Route::get('ponds-delete/{pond}', [PondsController::class, 'delete'])->name('admin.ponds.delete');
    Route::resource('feeds', FeedController::class);
    Route::get('feeds-delete/{feed}', [FeedController::class, 'delete'])->name('admin.feeds.delete');

    Route::get('pond_calculation_histories', [AdminCalculationHistoryController::class, 'pond_calculation_histories'])->name('pond_calculation_histories');
    Route::get('pond_calculation_histories-by-user/{user}', [AdminCalculationHistoryController::class, 'getPondCalculationHistoryByUser'])->name('pond_calculation_histories.show');
    Route::get('feed_calculation_histories', [AdminCalculationHistoryController::class, 'feed_calculation_histories'])->name('feed_calculation_histories');
    Route::get('feed_calculation_histories-by-user/{user}', [AdminCalculationHistoryController::class, 'getFeedCalculationHistoryByUser'])->name('feed_calculation_histories.show');

    Route::get('monitorings', [MonitoringController::class, 'index'])->name('monitorings');
    Route::get('monitoring-by-user/{user}', [MonitoringController::class, 'monitoringPerUser'])->name('monitorings.show');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/ponds_info',[PondsInfoController::class, 'index'])->name('ponds_info');
Route::get('/ponds_info/{id}',[PondsInfoController::class, 'show'])->name('ponds_info.show');
Route::get('/feeds_info',[FeedsInfoController::class, 'index'])->name('feeds_info');
Route::get('/feeds_info/{id}',[FeedsInfoController::class, 'show'])->name('feeds_info.show');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/calculation_history',[CalculationHistoryController::class, 'index'])->name('calculation_history');
    Route::post('/calculation_history',[CalculationHistoryController::class, 'store'])->name('calculation_history.store');

    Route::get('/feed_calculation_history',[FeedCalculationHistoryController::class, 'index'])->name('feed_calculation_history');
    Route::post('/feed_calculation_history',[FeedCalculationHistoryController::class, 'store'])->name('feed_calculation_history.store');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/edit-profile', [UserController::class, 'edit'])->name('edit_profile');
    Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('update_profile');
});


Route::get('/round_fish_pond', function(){
    return view('round_fish_pond');
})->name('round_fish_pond');

Route::get('/rectangular_fish_pond', function(){
    return view('rectangular_fish_pond');
})->name('rectangular_fish_pond');

Route::get('/fish_feeds', function(){
    return view('fish_feeds');
})->name('fish_feeds');

Route::get('/calculation', function(){
    return view('calculation');
})->name('calculation');

Route::get('/fish_ponds', function(){
    return view('fish_ponds');
})->name('fish_ponds');

Route::get('/fish_reproduction', function(){
    return view('fish_reproduction');
})->name('fish_reproduction');
