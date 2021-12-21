<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/admin',[
    'uses' => 'UserController@getAdminLogin',
    'as' => 'admin.login.get'
]);

Route::post('/admin/login',[
    'uses' => 'UserController@postAdminLogin',
    'as' => 'admin.login'
]);

Route::get('/login',[
    'uses' => 'UserController@getLogin',
    'as' => 'login.get'
]);

Route::get('/signup',[
   'uses' => 'UserController@getSignUp',
    'as' => 'signup.get'
]);

Route::post('/login',[
    'uses' => 'UserController@loginUser',
    'as' => 'login'
]);

Route::post('/register',[
    'uses' => 'UserController@registerUser',
    'as' => 'register'
]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [
        'uses' => 'UserController@getHome',
        'as' => 'home'
    ]);

    Route::get('/internships',[
        'uses' => 'InternshipController@showInternship',
        'as' => 'internship.show'
    ]);

    Route::get('/jobs',[
        'uses' => 'JobController@showJob',
        'as' => 'job.show'
    ]);

    Route::get('/projects',[
        'uses' => 'ProjectController@showProject',
        'as' => 'project.show'
    ]);

    Route::get('/conferences',[
        'uses' => 'ConferenceController@showConference',
        'as' => 'conference.show'
    ]);

    Route::get('/publications',[
        'uses' => 'PublicationController@showPublication',
        'as' => 'publication.show'
    ]);

    Route::get('/settings',[
        'uses' => 'UserController@showSettings',
        'as' => 'settings.show'
    ]);

    Route::get('/admin/panel',[
        'uses' => 'UserController@getAdminPanel',
        'as' => 'admin.panel'
    ]);

    Route::get('/logout',[
        'uses' => 'UserController@logout',
        'as' => 'logout',
        'middleware' => 'auth'
    ]);

    Route::post('/internship/fill',[
       'uses' => 'InternshipController@fillInternship',
        'as' => 'internship.fill'
    ]);

    Route::post('/project/fill',[
        'uses' => 'ProjectController@fillProject',
        'as' => 'project.fill'
    ]);

    Route::post('/job/fill',[
        'uses' => 'JobController@fillJob',
        'as' => 'job.fill'
    ]);

    Route::post('/publication/fill',[
        'uses' => 'PublicationController@fillPublication',
        'as' => 'publication.fill'
    ]);

    Route::post ('/conference/fill',[
        'uses' => 'ConferenceController@fillConference',
        'as' => 'conference.fill'
    ]);

    Route::post('/other/fill',[
        'uses' => 'OtherController@fillOther',
        'as' => 'other.fill'
    ]);

    Route::post('/personal_details/fill',[
       'uses' => 'UserController@fillPersonalDetails',
        'as' => 'personal_details.fill'
    ]);

    Route::post('/educational_details/fill',[
        'uses' => 'UserController@fillEducationalDetails',
        'as' => 'educational_details.fill'
    ]);

    Route::get('/generate/tokens',[
        'uses' => 'UserController@generateTokens',
        'as' => 'token.generate'
    ]);

});

