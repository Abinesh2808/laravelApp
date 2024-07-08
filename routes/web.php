<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;



#Welcome page
Route::view('/', 'welcome');


#Login routes
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('login');


#Account routes
Route::get('/statement/{fromDate}/to/{toDate}', [AccountController::class, 'getStatement'])->name('statement');
Route::get('/deposit', [AccountController::class, 'depositAmount'])->name('deposit');
Route::get('/withdraw', [AccountController::class, 'withdrawAmount'])->name('withdraw');
Route::get('/update_account', [AccountController::class, 'updateAccount'])->name('update_account');
Route::get('/close_account', [AccountController::class, 'closeAccount'])->name('close_account');
Route::get('/check_balance', [AccountController::class, 'checkBalance'])->name('check_balance');


#Customer routes
Route::get('/whoami', [CustomerController::class, 'forgotAccountNumber'])->name('whoami');
Route::get('/findme', [CustomerController::class, 'forgotPassword'])->name('findme');