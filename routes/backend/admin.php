<?php

Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'AdminController@index')->name('dashboard');