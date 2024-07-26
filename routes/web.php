<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SocialLoginController::class, 'index']);
Route::get('/github/redirect', [SocialLoginController::class, 'github_login']);
Route::get('/github/callback', [SocialLoginController::class, 'github_redirect']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
});
