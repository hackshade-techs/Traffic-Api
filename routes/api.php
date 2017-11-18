<?php

use Illuminate\Http\Request;

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

// Route::get('/incidents', 'API\IncidentAPIController')->middleware('auth:api');


Route::resource('incidents', 'API\IncidentAPIController');
Route::resource('user_updates', 'API\UserUpdateAPIController');

Route::resource('tests', 'TestAPIController');