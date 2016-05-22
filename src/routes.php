<?php


Route::group(['middleware' => 'web'], function () {

Route::get('/profile-picture', 'abhitheawesomecoder\profilepic\controller\ProfilepicController@editprofilepic');

Route::post('/profile-picture', 'abhitheawesomecoder\profilepic\controller\ProfilepicController@saveeditprofilepic');
});
