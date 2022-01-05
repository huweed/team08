<?php

use App\Http\Controllers\CampsController;
use App\Http\Controllers\CharactersController;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
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

Route::post('register',[AuthController::class,'register']) ;
Route::post('login',[AuthController::class,'login']) ;

Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::get('camps',[CampsController::class,'api_camps']);
    Route::patch('camps',[CampsController::class,'api_update']);
    Route::delete('camps',[CampsController::class,'api_delete']);
    Route::get('characters',[CharactersController::class,'api_characters']);
    Route::patch('characters',[CharactersController::class,'api_update']);
    Route::delete('characters',[CharactersController::class,'api_delete']);
} );



