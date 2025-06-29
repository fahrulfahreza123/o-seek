<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// use App\Http\Controllers\Auth\ForgotPasswordController;
// use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

use App\Http\Controllers\PasswordResetController;

use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//forgot, verify, reset password
Route::post('/forgot-password', [PasswordResetController::class, 'sendVerificationCode'])->name('api.forgot.password.sendCode');
Route::post('/verify-security-code', [PasswordResetController::class, 'verifySecurityCode'])->name('api.forgot.password.verifyCode');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('api.forgot.password.reset');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('administrator/login');
})->name('login');

