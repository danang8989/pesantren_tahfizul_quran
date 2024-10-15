<?php
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\StudentController;
use App\Http\Controllers\User\FormDataController;
use App\Http\Controllers\User\TestingScheduleController;
use App\Http\Controllers\User\ResultController;

Route::namespace('User')->middleware('auth')->prefix('/user')->name('user.')->group(function(){
    Route::middleware(App\Http\Middleware\User::class)->group(function() {
        Route::get('home', [HomeController::class, 'index'])->name('home');

        Route::get('data', [FormDataController::class, 'index'])->name('data');
        Route::post('data', [FormDataController::class, 'insert'])->name('data.insert');

        Route::get('testing_schedule', [TestingScheduleController::class, 'index'])->name('testing_schedule');
        Route::get('result', [ResultController::class, 'index'])->name('result');
    });
});