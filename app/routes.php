<?php

# Shortcuts
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Registration
Route::get('/register', 'RegistrationController@create');
Route::resource('registration', 'RegistrationController');

# Login
