<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Payment\MelstoreController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Payment\StripeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebhookController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pricing', [HomeController::class, 'subscriptions'])->name('subscriptions');
Route::get('/pricing/{id}', [HomeController::class, 'subscriptionBuy'])->name('subscriptions.show');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAction'])->name('register.action');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/transactions', [ProfileController::class, 'transactions'])->name('profile.transactions');
Route::get('/profile/support', [ProfileController::class, 'support'])->name('profile.support');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/detect', [DetectController::class, 'detect'])->name('detect');

Route::get('/payment/melstore/{id}', [PaymentController::class, 'melstore'])->name('payment.melstore');

Route::post('/webhook/melstore', [MelstoreController::class, 'webhook'])->name('webhook.melstore');
Route::get('/payment/stripe/{id}', [PaymentController::class, 'stripe'])->name('payment.stripe');
Route::post('/webhook/stripe', [StripeController::class, 'webhook'])->name('webhook.stripe');

Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('policy');
