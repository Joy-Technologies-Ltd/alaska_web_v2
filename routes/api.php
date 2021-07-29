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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// FRONTEND AUTH
Route::group(['namespace' => 'API\Frontend\Auth', 'middleware' => 'api'], function(){
    Route::post('/signin', 'AuthController@signIn');
    Route::post('/signin-social', 'AuthController@signUpSocial');
    Route::post('/signup', 'AuthController@signUp');
    Route::post('/signout', 'AuthController@signOut');
});

Route::group(['namespace' => 'API\Frontend', 'middleware' => 'api'], function(){
    Route::get('countries', 'CommonController@countries');
    Route::get('languages', 'CommonController@languages');
    Route::get('genders', 'CommonController@genders');
    Route::get('blood-groups', 'CommonController@bloodGroups');
});


// BACKEND AUTH
Route::group(['namespace' => 'API\Backend\Auth', 'middleware' => 'api'], function(){
    Route::post('/admin/signin', 'AuthController@signIn');
    Route::post('/admin/signup', 'AuthController@signUp');
    Route::post('/admin/signout', 'AuthController@signOut');
});


Route::group(['middleware' => 'auth:sanctum'], function(){

    //START FRONTEND
    Route::group(['namespace'  => 'API\Frontend'], function(){
        //CREATE PERSONAL INFO
        Route::post('/personal-info', 'UserController@personalInfo');

        //RESOURCE CONTROLLERS
        Route::apiResources([
            "job-experience"    => "JobExperienceController",
            "gallery"           => "GalleryController"
        ]);
        
        //BASE CONTROLLERS
        Route::get('/contacts', 'ContactController@contacts');
        Route::get('/pending-contacts', 'ContactController@pendingFriends');
        Route::get('/blocked-contacts', 'ContactController@blockedFriends');
        Route::get('/search-user', 'ContactController@searchUser');

        Route::get('/current-token', 'ContactController@currentToken');

        //APPROVAL STATUSES
        Route::get('/approval-status', 'ContactController@approvalStatus');

        //NEW CONTACT ADD
        Route::post('/add-new-contacts', 'ContactController@addNewContacts');
        Route::post('/approve-contacts', 'ContactController@approveContacts');
        Route::post('/block-contacts', 'ContactController@blockContact');
        Route::post('/unblock-contacts', 'ContactController@unblockContact');
        Route::post('/decline-contacts', 'ContactController@declineContact');

        //PROFILE
        Route::get('/profile', 'UserProfileController@profile');
        Route::post('/profile-update', 'UserProfileController@profileUpdate');

        //START MESSENGER
        Route::get('messages', 'MessengerController@messages');
        Route::post('message-store', 'MessengerController@messageStore');

    });
    //END FRONTEND

    //START BACKEND
    Route::group(['namespace'  => 'API\Backend'], function(){    
        Route::group(['namespace' => 'Auth'], function(){
            Route::apiResources([
                'roles'  => 'RoleController',
                'users'  => 'UserController',
                
            ]);
        });       
        Route::group(['namespace' => 'AdminPanel'], function(){
            Route::apiResources([
               
                'admin-user' => 'UserController',
                'general-user' => 'GeneralUserController'
            ]);
            Route::get('total-panel-user', 'AdminDashboardController@totalPanelUser'); 
        });   
         
    });
    //END BACKEND


    // Route::group(['namespace'  => 'API\Backend'], function(){
    //     Route::apiResources([

    //     ]);
    // });
});