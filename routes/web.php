<?php


use App\Http\Controllers\CampsController;
use App\Http\Controllers\CharactersController;
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


Route::get('characters/difficulty',[CharactersController::class, 'difficulty']) ->name('characters.difficulty');

Route::resource("characters" , CharactersController::class) ;
Route::resource("camps" , CampsController::class) ;




