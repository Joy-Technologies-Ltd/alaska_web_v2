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

//Route::group(['namespace' => 'Backend'], function(){
//
//    Route::get('/admin', 'HomeController@index');
//    Route::get('/admin/{any}', 'HomeController@index')->where('any', '.*');
//
//});
//
//Route::group(['namespace' => 'Frontend'], function(){
//    // Route::get('/', 'HomeController@index');
//    Route::get('/{path}', 'HomeController@index')->where('path','([A-z\d\-\/_.]+)?');
//});

Route::get('/test', function (){
    return view('frontend.home');
});

Route::get('/sign-in', function (){
    return view('frontend.login');
});
Route::get('/sign-up', function (){
    return view('frontend.signup');
});


//sign-in (admin & user both)
Route::post('/',[\App\Http\Controllers\UserAuthController::class,'authenticate'])->name('sign-in');

//sign-out for admin
Route::get('/',[\App\Http\Controllers\UserAuthController::class,'adminSessionClose']);

//sign-out for user
Route::get('/',[\App\Http\Controllers\UserAuthController::class,'userSessionClose']);

//sign-up for user
Route::post('/user-sign-up',[\App\Http\Controllers\UserAuthController::class,'signUpUser'])->name('reg-user');

//sign-up for admin
Route::post('/admin-sign-up',[\App\Http\Controllers\UserAuthController::class,'signUpAdmin'])->name('reg-admin');

//User Protected Routes-----------------------------------------------------------//
Route::group(['middleware'=>'userAuth'], function (){

});
//Admin Protected Routes-----------------------------------------------------------//
Route::group(['middleware'=>'adminAuth'], function (){

});
