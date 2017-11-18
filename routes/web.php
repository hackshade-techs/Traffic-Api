<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@welcome');


// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');
    CRUD::resource('trip', 'TripCrudController');
    CRUD::resource('feedback', 'FeedbackCrudController');
    CRUD::resource('incident', 'IncidentCrudController');
    CRUD::resource('userupdate', 'UserUpdateCrudController');
    CRUD::resource('trafficupdate', 'TrafficUpdateCrudController');
    CRUD::resource('payment', 'PaymentCrudController');
});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');
