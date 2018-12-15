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

Route::get('/','PagesController@index');
Route::get('/test','PagesController@test');
Route::get('/service','PagesController@service');
Route::get('/portfolio','PagesController@portfolio');
Route::get('/contact','PagesController@contact');
Route::resource('posts','PostsController');
Route::post('/contact','PagesController@form');
//Route::get('/users/{id}', function ($id) {
    //return 'This is number'.$id;
//});
Route::get('/share', function()
{
	return Share::load('http://www.example.com', 'My example')->twitter();
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');



