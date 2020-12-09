<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
    

});
Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
    Route::get('data', 'DataController@data');

    Route::get('dataall', 'DataController@dataAuth')->middleware('jwt.verify');
    Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify'); 

  
