<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/siswa", [SiswaController::class, "index"]);
Route::get("/siswa/{id}", [SiswaController::class, "detail"]);
Route::post("/siswa", [SiswaController::class, "create"]);
Route::put("/siswa/{id}", [SiswaController::class, "update"]);
Route::delete("/siswa/{id}", [SiswaController::class, "delete"]);
