<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('post-login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create'])->name('register');


Route::post('/users', [UserController::class, 'create'])->name('user.store');
// Route::post('/login', [UserController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TransactionController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [UserController::class, 'index'])->name('user.index');
    Route::get('/transactions', [TransactionController::class, 'showAllTransactions'])->name('transaction.index');
    Route::get('/deposits', [TransactionController::class, 'showDeposits'])->name('deposit.index');
    Route::post('/deposit', [TransactionController::class, 'deposit'])->name('deposit.store');
    Route::get('/withdrawals', [TransactionController::class, 'showWithdrawals'])->name('withdraw.index');
    Route::post('/withdrawal', [TransactionController::class, 'withdraw'])->name('withdraw.store');
});


