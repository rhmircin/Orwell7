<?php

/*
|--------------------------------------------------------------------------
| Application Routes - AUTHENTICATION
|--------------------------------------------------------------------------
*/
Route::auth();

// Route accessible to guest user only
Route::group(['middleware' => 'guest'], function(){

    // Social Login
    Route::get('login/{provider}', array(
        'uses' => 'Auth\AuthController@auth',
        'as'   => 'auth'
    ));
    Route::get('login/{provider}/callback', 'Auth\AuthController@authCallback');

});

/*
|--------------------------------------------------------------------------
| Application Routes - FRONTEND
|--------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Frontend'], function(){

    Route::get('/', array(
        'uses' => 'F_HomeController@index',
        'as'   => 'home'
    ));

    Route::get('home', array(
        'uses' => 'F_HomeController@index',
        'as'   => 'home'
    ));

    Route::get('contact', array(
        'uses' => 'F_ContactController@index',
        'as'   => 'contact'
    ));

    Route::get('courses', array(
        'uses' => 'F_CourseController@grid',
        'as'   => 'courses'
    ));

    Route::get('courses/{slug}', 'F_CourseController@detail');
    Route::get('courses/{slug_course}/{slug}', 'F_KnowledgeUnitController@detail');

    // Route accessible to auth user only
    Route::group(['middleware' => 'auth'], function(){

        // Profile
        Route::get('profile', 'F_UserController@index');
        Route::post('profile', 'F_UserController@saveprofile');

        // Course Rating
        Route::get('courses/{slug}/rate/{rate}', 'F_CourseController@rate');

    });

});

/*
|--------------------------------------------------------------------------
| Application Admin CRUD - BACKEND
|--------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Backend', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){

    Route::get('/', array(
        'uses' => 'B_BoardController@index',
        'as'   => 'home'
    ));

    Route::get('home', array(
        'uses' => 'B_BoardController@index',
        'as'   => 'home'
    ));

    Route::resource('course', 'B_CourseController');
    Route::resource('category', 'B_CategoryController');
    Route::resource('unit', 'B_UnitController');
    Route::resource('knowledgeunit', 'B_KnowledgeUnitController');

});

Route::get('test',function (){
    $user = Auth::user();

    echo $user->telephone; // ? "true" : "false";
});