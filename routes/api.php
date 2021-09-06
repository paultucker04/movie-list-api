<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Car;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Public routes
 */
Route::post('/register', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

/**
 * Protected routes
 */
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('movies', MovieController::class);
    Route::post('/isLoggedIn', [AuthController::class, 'isLoggedIn']);
});



// Route::get('/cars', [CarController::class, 'index']);
// Route::post('/cars', [CarController::class, 'store']);
// Route::post('/cars', [CarController::class, 'store']);
