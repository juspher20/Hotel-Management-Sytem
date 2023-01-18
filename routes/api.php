<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\EmployeeController;
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


Route::middleware(['auth:sanctum', 'ver'])->get(
    '/hotel/email',
    function (Request $request) {
        return $request->user();
    }
);

Route::post("hotel/login", [AuthenticateController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get("hotel/employee", [EmployeeController::class, 'index']);
    Route::post("hotel/create", [EmployeeController::class, 'store']);
    Route::get('hotel/{id}', [EmployeeController::class, 'show']);
    Route::delete('hotel/delete/{id}', [EmployeeController::class, 'destroy']);
    Route::put('hotel/update/{id}', [EmployeeController::class, 'update']);

});
