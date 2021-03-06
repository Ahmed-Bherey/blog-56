<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
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

Route::get("/admin" , [DashboardController::class , 'index'])->middleware('auth');
Route::get("/show-user" , [DashboardController::class , 'showUser']);

Route::middleware('auth')->prefix("admin")->group(function(){
    Route::resource("/user" , UserController::class);
});