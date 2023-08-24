<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/classes', [ClassesController   ::class, 'classes'])->name('classes');
Route::get('/schedule', [ScheduleController   ::class, 'schedule'])->name('schedule');
Route::get('/team', [TeamController   ::class, 'team'])->name('team');


Route::get('/contacts', [ContactsController   ::class, 'contacts'])->name('contacts');

Route::group(['controller' => AuthController::class], function () {
    Route::get('/login', 'getLoginPage')->name('auth.loginPage');
    Route::post('/login', 'login')->name('auth.login');

    Route::get('/register', 'getRegisterPage')->name('auth.registerPage');
    Route::post('/register', 'register')->name('auth.register');
//
//    Route::get('/logout', 'logout')->name('auth.logout');
});
