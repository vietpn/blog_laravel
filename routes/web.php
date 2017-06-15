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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', ['as'=> 'admin.index', 'uses' => 'HomeController@index'])->name('admin');


    Route::get('admin/posts', ['as'=> 'admin.posts.index', 'uses' => 'Admin\PostController@index']);
    Route::post('admin/posts', ['as'=> 'admin.posts.store', 'uses' => 'Admin\PostController@store']);
    Route::get('admin/posts/create', ['as'=> 'admin.posts.create', 'uses' => 'Admin\PostController@create']);
    Route::put('admin/posts/{posts}', ['as'=> 'admin.posts.update', 'uses' => 'Admin\PostController@update']);
    Route::patch('admin/posts/{posts}', ['as'=> 'admin.posts.update', 'uses' => 'Admin\PostController@update']);
    Route::delete('admin/posts/{posts}', ['as'=> 'admin.posts.destroy', 'uses' => 'Admin\PostController@destroy']);
    Route::get('admin/posts/{posts}', ['as'=> 'admin.posts.show', 'uses' => 'Admin\PostController@show']);
    Route::get('admin/posts/{posts}/edit', ['as'=> 'admin.posts.edit', 'uses' => 'Admin\PostController@edit']);

    //Route::resource('posts', 'PostController');
});


Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug', '[\w\d-\_]+');
Route::get('/blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

