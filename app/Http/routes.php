<?php
Route::get('/', 'PostController@getList');
 
Route::controller('post', 'PostController');
Route::controller('comments', 'CommentController');