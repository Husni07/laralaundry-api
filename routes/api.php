<?php

use App\Http\Controllers\api\PromoController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\ShopController;
use App\Http\Controllers\api\LaundryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'login']);

Route::get('user', [UserController::class, 'readAll']);
Route::get('promo', [PromoController::class, 'readAll']);
Route::get('shop', [ShopController::class, 'readAll']);
Route::get('laundry', [LaundryController::class, 'readAll']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('laundry/user/{id}', [LaundryController::class, 'whereUserId']);
    Route::post('laundry/claim', [LaundryController::class, 'claim']);
    Route::get('promo/limit', [PromoController::class, 'readLimit']);
    Route::get('shop/recomendation/limit', [ShopController::class, 'readRecomendationLimit']);
    Route::get('shop/search/city/{name}', [ShopController::class, 'searchByCity']);
});
Set-ExecutionPolicy AllSigned 
Set-ExecutionPolicy AllSigned Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))