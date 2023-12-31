<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NutritionDiaryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\WishClassesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/changeLang', [MainController::class, 'changeLang'])->name('changeLang');

Route::group(['controller' => AboutController::class], function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/php', 'aboutBlog')->name('about.blog');

});

Route::get('/subscription', [SubscriptionController::class, 'subscription'])->name('about.subscription');

Route::get('/subscription/{subscription}/payment/redirect', [PaymentController::class, 'redirect'])->name('payment.redirect');
Route::get('/subscription/payment/{hash}', [PaymentController::class, 'callback'])->name('payment.callback');

Route::group(['controller' => ScheduleController::class], function () {
    Route::get('/schedule','index')->name('schedule');
    Route::post('/schedule/{id}/book', 'book')->name('schedule.book');
    Route::post('/schedule/delete', 'delete')->name('schedule.delete');
});

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

    Route::post('/', 'updateAccount')->name('account.update');
    Route::post('/changePassword', 'changePassword')->name('account.changePassword');
});

Route::group(['prefix' => '/classes', 'controller' => ClassesController::class], function () {
    Route::get('/', 'classes')->name('classes');
    Route::get('/{classes}', 'training')->name('classes.training');
});

Route::get('/email/verify', [VerificationController::class, 'view'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'handle'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::group(['controller' => ForgetPasswordController::class, 'middleware' => 'guest'], function () {
    Route::get('/forget-password','forgotPasswordView')->name('password.request');
    Route::post('/forgot-password','sendResetLink')->name('password.email');
    Route::get('/reset-password/{token}','resetPasswordView')->name('password.reset');
    Route::post('/reset-password','resetPassword')->name('password.update');
});

Route::get('/google/auth/redirect/', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/google/auth/callback/', [GoogleController::class, 'callback'])->name('google.callback');

Route::group(['prefix' => '/favourite-classes', 'controller' => WishClassesController::class, 'middleware' => 'auth'], function () {
    Route::get('/', 'favouriteClasses')->name('account.favourite');
    Route::post('/{classes}/delete', 'delete')->name('account.favourite.delete');
    Route::post('/{classes}/add', 'add')->name('account.favourite.add');
});


Route::group(['controller' => BoxController::class,  'middleware' => 'auth'], function () {
    Route::get('/boxes','index')->name('boxes');
    Route::post('/boxes/{id}/book', 'book')->name('boxes.book');
    Route::post('/boxes/delete', 'delete')->name('boxes.delete');
});

Route::group(['prefix' => '/nutrition-diary', 'controller' => NutritionDiaryController::class], function () {
    Route::get('/', [NutritionDiaryController::class, 'index'])->name('nutrition-diary');
    Route::post('/', [NutritionDiaryController::class, 'store'])->name('nutrition-diary.store');
    Route::get('/create', [NutritionDiaryController::class, 'create'])->name('nutrition-diary.create');
    Route::get('/{id}/edit', [NutritionDiaryController::class, 'edit'])->name('nutrition-diary.edit');
    Route::post('/{id}', [NutritionDiaryController::class, 'update'])->name('nutrition-diary.update');
    Route::delete('/{id}', [NutritionDiaryController::class, 'delete'])->name('nutrition-diary.delete');
});
