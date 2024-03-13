<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/cars",[CarController::class,"getCars"]);
Route::get("/car",[CarController::class,"getCar"]);
Route::post("/addcar",[CarController::class,"addCar"]);
Route::put("/modifycar",[CarController::class,"modifyCar"]);
Route::delete("/destroycar",[CarController::class,"destroyCar"]);