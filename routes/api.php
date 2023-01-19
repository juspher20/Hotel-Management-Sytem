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
    '/hotels',
    function (Request $request) {
        return $request->user();
    }
);

Route::post("hotels/login", [AuthenticateController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get("hotels", [EmployeeController::class, 'index']);
    Route::post("hotels/", [EmployeeController::class, 'store']);
    Route::get('hotels/{id}', [EmployeeController::class, 'show']);
    Route::delete('hotels/{id}', [EmployeeController::class, 'destroy']);
    Route::put('hotels/{id}', [EmployeeController::class, 'update']);

});
