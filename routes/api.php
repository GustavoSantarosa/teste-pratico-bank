<?php

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

Route::get('/', function () {
    return "Enjoy the Silence...";
});

Route::prefix('banco')->group(function () {
    Route::get('/',          'Api\\bankController@index')     ->name('allBanks');
    Route::get('/{id}',      'Api\\bankController@show')      ->name('showBank');
    Route::post('/',         'Api\\bankController@store')     ->name('storeBank');
    Route::put('/{id}',      'Api\\bankController@update')    ->name('updateBank');
    Route::delete('/{id}',   'Api\\bankController@destroy')   ->name('deleteBank');

    Route::post('release/',  'Api\\bankController@addRelease')->name('storeBank');
});
