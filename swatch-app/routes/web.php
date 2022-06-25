<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\CheckoutController;
use App\Models\Checkout;

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


Route::get('/', [CheckoutController::class, 'index']
)->name('welcome');

Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('checkout/{products:slug}', [CheckoutController::class, 'show'])->name('welcome.show');
Route::post('checkout/{products}', [CheckoutController::class, 'store'])->name('checkout.store');



// Socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

// User Manual Register
Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login_user',[LoginController::class, 'authenticate'])->name('login-user');

Route::post('signup', [RegisterController::class, 'index']
);
Route::post('signup', [RegisterController::class, 'store']
);

// Route::get('checkout/{product:slug}', function () {
//     return view('checkout');
// })->name('checkout');

// Route::get('checkout/{product:slug}', [CheckoutController::class, 'create'])->name('checkout.create');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
