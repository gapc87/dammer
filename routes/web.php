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

Route::get('/home', 'HomeController@index')->name('home');


// Rutas disponibles para usuarios autenticados
Route::middleware(['auth'])->group(function () {

    // Rutas para los administradores de la app
    Route::middleware(['role:admin'])->prefix('admin')->namespace('Backend')->group(function () {

        // /admin/dashboard
        Route::get('dashboard', 'AdminController@index')
            ->name('admin.dashboard');

        Route::get('modules/{level}/', 'AdminController@modules')
            ->name('admin.modules');


        Route::resource('courses', 'Backend\admin\CourseController');


    });

    // Product
    Route::post('products/store', 'ProductController@store')
        ->name('products.store')
        ->middleware('permission:products.create');


    Route::get('products', 'ProductController@index')
        ->name('products.index')
        ->middleware('permission:products.index');


    Route::get('products/create', 'ProductController@create')
        ->name('products.create')
        ->middleware('permission:products.create');


    Route::put('products/{product}', 'ProductController@update')
        ->name('products.update')
        ->middleware('permission:products.edit');


    Route::get('products/{product}', 'ProductController@show')
        ->name('products.show')
        ->middleware('permission:products.show');


    Route::delete('products/{product}', 'ProductController@destroy')
        ->name('products.destroy')
        ->middleware('permission:products.destroy');


    Route::get('products/{product}/edit', 'ProductController@edit')
        ->name('products.edit')
        ->middleware('permission:products.edit');


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