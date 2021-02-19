<?php

use App\Http\Controllers\GeoIpController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/', GeoIpController::class);
//
//
//Route::post('/payment', [StripeController::class, 'Payment']);
//Route::get('/checkout', [StripeController::class, 'Checkout']);
