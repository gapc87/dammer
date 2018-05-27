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
    return view('welcome');
});

Auth::routes();

// Rutas disponibles para usuarios autenticados
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');

    // Ruta POST que envía el mensaje que escriba el administrador desde el dashboard a todos los usuarios
    Route::post('dashboard', 'DashboardController@index')
        ->name('admin.broadcast')
        ->middleware(['role:admin']);

    // Grupo de rutas para los administradores
    Route::middleware(['role:admin'])
        ->prefix('admin')
        ->name('admin.')
        ->namespace('Admin')
        ->group(function () {

            Route::resource('teachers', 'TeacherController')->except('view');
            Route::resource('students', 'StudentController')->except('view');
            Route::resource('users', 'UserController')->except('view');

    });

    Route::get('users', 'UserController@index')
        ->name('users.index')
        ->middleware('permission:users.index');


    Route::put('users/{product}', 'UserController@update')
        ->name('users.update')
        ->middleware('permission:users.edit');


    Route::get('users/{product}', 'UserController@show')
        ->name('users.show')
        ->middleware('permission:users.show');


    Route::delete('users/{product}', 'UserController@destroy')
        ->name('users.destroy')
        ->middleware('permission:users.destroy');


    Route::get('users/{product}/edit', 'UserController@edit')
        ->name('users.edit')
        ->middleware('permission:users.edit');


    Route::post('store', 'RoleController@store')
        ->name('roles.store')
        ->middleware('permission:roles.create');


    Route::get('create', 'RoleController@create')
        ->name('roles.create')
        ->middleware('permission:roles.create');


    Route::get('roles', 'RoleController@index')
        ->name('index')
        ->middleware('permission:roles.index');


    Route::put('{role}', 'RoleController@update')
        ->name('roles.update')
        ->middleware('permission:roles.edit');


    Route::get('{role}', 'RoleController@show')
        ->name('roles.show')
        ->middleware('permission:roles.show');


    Route::delete('{role}', 'RoleController@destroy')
        ->name('roles.destroy')
        ->middleware('permission:roles.destroy');


    Route::get('{role}/edit', 'RoleController@edit')
        ->name('roles.edit')
        ->middleware('permission:roles.edit');


});