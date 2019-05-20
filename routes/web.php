<?php

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

Route::get('/', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => '/'
]);

Route::get('logout', function (){
    Auth::logout();
    return redirect('/');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'diva'], function () {
    // Administrator Routes
    Route::get('/administrator', [
        'uses'  => 'AdminController@index',
        'as'    => 'administrator'
    ]);
    
    // Projects Routes
    Route::get('/projects/all', [
        'uses'  => 'ProjectsController@index',
        'as'    => 'all-projects'
    ]);
    
    Route::get('/projects/add', [
        'uses'  => 'ProjectsController@create',
        'as'    => 'add-new-project'
    ]);

    Route::post('/projects/all', [
        'uses'  => 'ProjectsController@store',
        'as'    => 'store-project'
    ]);

    Route::get('/projects/view/{id}', [
        'uses'  => 'ProjectsController@show',
        'as'    => 'view-project'
    ]);

    Route::get('projects/edit/{id}', [
        'uses'  => 'ProjectsController@edit',
        'as'    => 'edit-project'
    ]);

    Route::post('projects/all/{id}', [
        'uses'  => 'ProjectsController@update',
        'as'    => 'update-project'
    ]);

    Route::get('projects/delete/{id}', [
        'uses'  => 'ProjectsController@destroy',
        'as'    => 'delete-project'
    ]);

    // Common Feedbacks Routes
    Route::get('feedbacks/all', [
        'uses'  => 'CommonFeedbacksController@index',
        'as'    => 'all-feedbacks'
    ]);

    Route::get('feedbacks/add', [
        'uses'  => 'CommonFeedbacksController@create',
        'as'    => 'add-new-feedback'
    ]);

    Route::post('feedbacks/all', [
        'uses'  => 'CommonFeedbacksController@store',
        'as'    => 'store-feedback'
    ]);

    Route::get('feedbacks/edit/{id}', [
        'uses'  => 'CommonFeedbacksController@edit',
        'as'    => 'edit-feedback'
    ]);

    Route::post('feedbacks/all/{id}', [
        'uses'  => 'CommonFeedbacksController@update',
        'as'    => 'update-feedback'
    ]);

    Route::get('feedbacks/delete/{id}', [
        'uses'  => 'CommonFeedbacksController@destroy',
        'as'    => 'destroy-feedback'
    ]);

    // Feedback operations dynamically
    Route::get('feedback/approve/{id}', [
        'uses'  => 'ProjectsController@approveFeedback',
        'as'    => 'approve-feedback'
    ]);

    Route::get('feedback/reject/{id}', [
        'uses'  => 'ProjectsController@rejectFeedback',
        'as'    => 'reject-feedback'
    ]);

    Route::get('feedback/delete/{id}', [
        'uses'  => 'ProjectsController@deleteFeedback',
        'as'    => 'delete-feedback'
    ]);

    Route::post('feedback/add/{id}', [
        'uses'  => 'ProjectsController@secondaryFeedbackStore',
        'as'    => 'secondary-feedback'
    ]);


    // Feedbacks Routes
    Route::post('feedback/add-new/', [
        'uses'  => 'ProjectsController@newFeedbackAdd',
        'as'    => 'new-feedback-add'
    ]);



    // User Routes
    Route::get('/users/all', [
        'uses'  => 'UsersController@index',
        'as'    => 'all-users'
    ]);
    
    Route::get('/users/add', [
        'uses'  => 'UsersController@create',
        'as'    => 'add-new-user'
    ]);

    Route::post('/users/all', [
        'uses'  => 'UsersController@store',
        'as'    => 'store-user'
    ]);

    Route::get('/users/view/{id}', [
        'uses'  => 'UsersController@show',
        'as'    => 'view-user'
    ]);

    Route::get('users/edit/{id}', [
        'uses'  => 'UsersController@edit',
        'as'    => 'edit-user'
    ]);

    Route::post('users/all/{id}', [
        'uses'  => 'UsersController@update',
        'as'    => 'update-user'
    ]);

    Route::get('users/delete/{id}', [
        'uses'  => 'UsersController@destroy',
        'as'    => 'delete-user'
    ]);


    // Roles Routes
    Route::get('/users/roles/all', [
        'uses'  => 'RoleController@index',
        'as'    => 'users-roles'
    ]);
    
    Route::get('/users/roles/add', [
        'uses'  => 'RoleController@create',
        'as'    => 'add-new-role'
    ]);

    Route::post('/users/roles/all', [
        'uses'  => 'RoleController@store',
        'as'    => 'store-role'
    ]);

    Route::get('/users/roles/view/{id}', [
        'uses'  => 'RoleController@show',
        'as'    => 'view-role'
    ]);

    Route::get('users/roles/edit/{id}', [
        'uses'  => 'RoleController@edit',
        'as'    => 'edit-role'
    ]);

    Route::post('users/roles/all/{id}', [
        'uses'  => 'RoleController@update',
        'as'    => 'update-role'
    ]);

    Route::get('users/roles/delete/{id}', [
        'uses'  => 'RoleController@destroy',
        'as'    => 'delete-role'
    ]);
    
});
