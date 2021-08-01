<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/', function (){
    return view('frontend.home');
});

Route::get('/sign-in', function (){
    return view('frontend.login');
});
Route::get('/sign-up', function (){
    return view('frontend.signup');
});
Route::get('service/privacy-policy', [HomeController::class,'privacyPolicy']);
Route::get('service/terms-and-conditions',[HomeController::class,'termsCondition']);

//sign-in (admin & user both)
Route::post('/',[UserAuthController::class,'authenticate'])->name('sign-in');

//sign-out for admin
Route::get('/sign-out-admin',[UserAuthController::class,'adminSessionClose']);

//sign-out for user
Route::get('/sign-out-user',[UserAuthController::class,'userSessionClose']);

//sign-up for user
Route::post('/user-sign-up',[UserAuthController::class,'signUpUser'])->name('reg-user');

//sign-up for admin
Route::post('/admin-sign-up',[UserAuthController::class,'signUpAdmin'])->name('reg-admin');

//User Protected Routes-----------------------------------------------------------//
Route::group(['middleware'=>'userAuth'], function (){
    Route::get('/user-profile',[HomeController::class,'userProfile'])->name('profile');
});
//Admin Protected Routes-----------------------------------------------------------//
Route::group(['middleware'=>'adminAuth'], function (){

});

