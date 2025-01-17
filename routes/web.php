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

Route::get('/', [SocialLoginController::class, 'index'])->name('login');
Route::get('/github/redirect', [SocialLoginController::class, 'github_login']);
Route::get('/github/callback', [SocialLoginController::class, 'github_redirect']);

Route::get('/facebook/redirect', [SocialLoginController::class, 'facebook_login']);
Route::get('/facebook/callback', [SocialLoginController::class, 'facebook_redirect']);

Route::get('/google/redirect', [SocialLoginController::class, 'google_login']);
Route::get('/google/callback', [SocialLoginController::class, 'google_redirect']);

Route::get('/linkedin/redirect', [SocialLoginController::class, 'linkedin_login']);
Route::get('/linkedin/callback', [SocialLoginController::class, 'linkedin_redirect']);

Route::get('/x/redirect', [SocialLoginController::class, 'x_login']);
Route::get('/x/callback', [SocialLoginController::class, 'x_redirect']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::get('logout', [SocialLoginController::class, 'logout']);
});
