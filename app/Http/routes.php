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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('wel', "WelcomeController@index");
Route::get('/', "HomeController@index");
Route::get('contact', "HomeController@contact");
Route::get('about', "PagesController@about");
Route::get('posts', "PostsController@index");


Route::get('/addme', 'PostsController@addpost');
Route::post('/addme', 'PostsController@addpost');

Route::get('/addcomment', 'PostsController@addcomment');
Route::post('/addcomment', 'PostsController@addcomment');



Route::get('/getcomments/{id?}',function($id){
    //$task = Task::find($id);
	$task="Commentouz";
    return Response::json($task);
});

 