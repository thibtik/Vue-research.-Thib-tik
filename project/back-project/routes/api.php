<?php
use App\Http\Controllers\StudntController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/staffs',[StudntController::class,'index']);
Route::get('/staffs/{id}',[StudntController::class,'show']);
Route::post('/staffs',[StudntController::class,'store']);
Route::put('/staffs/{id}',[StudntController::class,'update']);
Route::delete('/staffs/{id}',[StudntController::class,'destroy']);

