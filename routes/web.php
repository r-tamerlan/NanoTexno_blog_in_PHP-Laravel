<?php

use Illuminate\Support\Facades\Route;


Route::view('/contact','contact')->name('contact');
Route::view('/about','about')->name('about');

Route::get('/','HomepageController@index')->name('homepage');


Route::get('/categories/{slug_categoryName}','CategoriesController@index')->name('categories');
Route::get('/post/{slug_post}','PostsController@index')->name('post');

Route::group(['prefix'=>'user'],function (){
    Route::get('/signin','UsersController@signin_form')->name('users.signin');
    Route::get('/registration','UsersController@registration_form')->name('users.registration');
    Route::post('/signin','UsersController@signin');
    Route::post('/registration','UsersController@registration');

});

