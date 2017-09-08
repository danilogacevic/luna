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

Route::get('/home', function () {
    return view('home');
})->middleware('admin');

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/blog-post',['as'=>'blog-post','uses'=>'HomeController@single_post']);
Route::get('/single-tour', 'HomeController@single_tour')->name('single-tour');

// Route::get('/luna',function(){

// 	return view('index');
// });

Route::get('/admin',function (){

	return view('backlayout.app');
})->middleware('admin');

// Route::resource('/admin/users','AdminUsersController');
Route::resource('/admin/posts','PostsController');
Route::resource('/admin/categories','CategoriesController');
Route::resource('/admin/media','PhotosController');

Route::post('/contactUs','HomeController@sendEmail');

Route::get('/single-tour/{id}','HomeController@single_tour');
