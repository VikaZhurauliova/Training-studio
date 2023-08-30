<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VerificationController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/changeLang', [MainController::class, 'changeLang'])->name('changeLang');

Route::group(['controller' => AboutController::class], function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/about-blog', 'aboutBlog')->name('about.blog');

});

Route::get('/subscription', [SubscriptionController::class, 'subscription'])->name('about.subscription');

Route::get('/subscription/{subscription}/payment/redirect', [PaymentController::class, 'redirect'])->name('payment.redirect');
Route::get('/subscription/payment/{hash}', [PaymentController::class, 'callback'])->name('payment.callback');

Route::get('/schedule', [ScheduleController   ::class, 'schedule'])->name('schedule');
Route::get('/team', [TeamController   ::class, 'team'])->name('team');

Route::get('/contacts', [ContactController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'sendFeedback'])->name('contacts.feedback');

Route::group(['controller' => AuthController::class], function () {
    Route::get('/login', 'getLoginPage')->name('auth.loginPage');
    Route::post('/login', 'login')->name('auth.login');

    Route::get('/register', 'getRegisterPage')->name('auth.registerPage');
    Route::post('/register', 'register')->name('auth.register');

    Route::get('/logout', 'logout')->name('auth.logout');
});

Route::group(['prefix' => '/account', 'controller' => AccountController::class, 'middleware' => 'auth'], function () {
    Route::get('/', 'account')->name('account.show');
    Route::get('/classes', 'favouriteClasses')->name('account.favourite');

    Route::post('/', 'updateAccount')->name('account.update');
    Route::post('/changePassword', 'changePassword')->name('account.changePassword');
});

Route::group(['prefix' => '/classes', 'controller' => ClassesController::class], function () {
    Route::get('/', 'classes')->name('classes');
    Route::get('/{class}', 'training')->name('classes.training');
});

Route::get('/email/verify', [VerificationController::class, 'view'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'handle'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forget-password', [ForgetPasswordController::class, 'forgotPasswordView'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgetPasswordController::class, 'sendResetLink'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPasswordView'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ForgetPasswordController::class, 'resetPassword'])->middleware('guest')->name('password.update');

Route::get('/google/auth/redirect/', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/google/auth/callback/', [GoogleController::class, 'callback'])->name('google.callback');
