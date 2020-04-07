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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/admin/roles', function () {
    return view('admin.roles.deleted.index');
});


Auth::routes();
Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home'  ]);

Route::group(['prefix' => '', 'as' => '', 'namespace'=>'Admin', 'middleware' => 'auth' ], function () {

   

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
// Dashboard
    Route::get('/dashboard', ['uses' => 'DashboardController@index', 'as' => 'dashboard']);

// Employee Infos
    Route::get('employee_infos', ['uses' => 'Employee_infosController@index', 'as' => 'employee_infos']);
    Route::get('employee_infos/create', ['uses' => 'Employee_infosController@create', 'as' => 'employee_infos/create']);
    Route::post('employee_infos/store', ['uses' => 'Employee_infosController@store', 'as' => 'employee_infos/store']);
    Route::get('employee_infos/edit/{id}', ['uses' => 'Employee_infosController@edit', 'as' => 'employee_infos/edit']);
    Route::post('employee_infos/update/{id}', ['uses' => 'Employee_infosController@update', 'as' => 'employee_infos/update']);
    Route::get('employee_infos/delete/{id}', [ 'uses'=> 'Employee_infosController@destroy', 'as' => 'employee_infos/delete' ]);
    Route::get('employee_infos/trashed', [ 'uses'=> 'Employee_infosController@trashed', 'as' => 'employee_infos/trashed' ]);
    Route::get('employee_infos/restore/{id}', [ 'uses'=> 'Employee_infosController@restore', 'as' => 'employee_infos/restore' ]);
    Route::get('employee_infos/kill/{id}', [ 'uses'=> 'Employee_infosController@kill', 'as' => 'employee_infos/kill' ]);

    //Users
    Route::get('users', ['uses' => 'UserController@index', 'as' => 'users']);
    Route::get('users/create', ['uses' => 'UserController@create', 'as' => 'users/create']);
    Route::get('users/edit/{id}', ['uses' => 'UserController@edit', 'as' => 'users/edit']);
    Route::post('users/update/{id}', ['uses' => 'UserController@update', 'as' => 'users/update']);
    Route::post('users/store', ['uses' => 'UserController@store', 'as' => 'users/store']);
    Route::get('users/delete/{id}', ['uses' => 'UserController@destroy', 'as' => 'users/delete']);

    // Profile

    Route::get('profile', ['uses' => 'ProfileController@index', 'as' => 'profile']);

    // Apply leave
    Route::get('apply-leave',['uses' => 'ApplyleaveController@index', 'as' => 'apply-leave']);
    Route::get('apply-leave/create',['uses' => 'ApplyleaveController@create', 'as' => 'apply-leave/create']);
    Route::post('apply-leave/store',['uses' => 'ApplyleaveController@store', 'as' => 'apply-leave/store']);





});
});



