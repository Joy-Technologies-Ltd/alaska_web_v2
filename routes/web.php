<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('migrate-fresh', function(){
    Artisan::call('migrate:fresh');
    return 'Migration fresh successfully';
});


Route::get('db-seed', function(){
    Artisan::call('db:seed');
    return 'DB Seed successfully';
});

Route::get('hello', function(){
    return bcrypt('12345633444');
});

Route::group(['namespace' => 'Backend'], function(){

    Route::get('/admin', 'HomeController@index');
    Route::get('/admin/{any}', 'HomeController@index')->where('any', '.*');

});


Route::group(['namespace' => 'Frontend'], function(){

    // Route::get('/', 'HomeController@index');
    Route::get('/{path}', 'HomeController@index')->where('path','([A-z\d\-\/_.]+)?');

});

