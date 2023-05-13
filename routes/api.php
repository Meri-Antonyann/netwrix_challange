<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\PartnerLocatorController;
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
Route::resource('partners', PartnerLocatorController::class)->only(['index','store','show','update','destroy']);
Route::get('countries', [CountryController::class, 'index']);
Route::get('states', [StateController::class, 'index']);
Route::get('types', [PartnerLocatorController::class, 'types']);