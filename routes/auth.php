<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

// Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

//Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth')->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::group(['prefix' => 'user/', 'as' => 'user.'], function () {


    // Route::get('/{idea}', [IdeaController::class, 'show'])->name('show');


    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

        Route::get('/transfers', [DashboardController::class, 'transfers'])->name('transfers');

        Route::post('/transfer', [TransferController::class, 'store'])->name('transfer');

        Route::get('/transfers/search', [DashboardController::class, 'transfersSearch'])->name('transfers-search');

        Route::get('/transfers/wire-transfer', [DashboardController::class, 'wireTransfer'])->name('wire-transfer');

        Route::get('/transfers/transfer-log', [DashboardController::class, 'transferLog'])->name('transfer-log');

        Route::get('/loan', [DashboardController::class, 'show'])->name('loan');

        Route::get('/pay-bill', [DashboardController::class, 'show'])->name('pay-bill');

        Route::get('/mortgage', [DashboardController::class, 'show'])->name('mortgage');

        Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');

        Route::get('/support', [DashboardController::class, 'show'])->name('support');

        Route::get('/settings', [DashboardController::class, 'show'])->name('settings');

        Route::get('/change-password', [DashboardController::class, 'show'])->name('change-password');

        // Route::put('/{idea}', [IdeaController::class, 'update'])->name('update');

        // Route::delete('/{idea}', [IdeaController::class, 'destroy'])->name('destroy');

        // Route::post('/{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
    });
});
