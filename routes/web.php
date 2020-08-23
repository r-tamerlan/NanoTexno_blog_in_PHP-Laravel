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
    Route::get('/activation/{activation_key}','UsersController@activation')->name('activation');
    Route::post('/exitaccount','UsersController@exitaccount')->name('user.exitAccount');

});

Route::group(['prefix'=> 'admin','namespace' => 'Admin'],function (){
    Route::view('/','admin.dashboard')->name('admin.dashboard');
    Route::get('/login','AdminController@login')->name('admin.login');
});




// For Email content test
Route::get('test/mail',function (){
    $user=\App\Models\User::find(2);
    return new App\Mail\UserSignUpMail($user);
});

// Sadece istifadecilerin gire bileceyi sehifeler v1
//Route::group(['middleware'=>'auth'],function(){
//     Meselen:
//     Route::get('/post/{slug_post}','PostsController@index')->name('post');
//     Xeta yeranarsan app\Exception\Handler.php dan Xetadaki funksiyani overlay elemek -
//     yazimdi, yeni Handler.php da yazmaq
//});

// Sadece istifadecilerin gire bileceyi sehifeler v2
//Route::get('/post/{slug_post}','PostsController@index')->name('post')->middleware('auth');

// Sadece istifadecilerin gire bileceyi sehifeler v3 Controllerde tanimlamaq
// public function __construct()
//{
// $this->middleware('auth');
//} bu zaman bu controllerin icindeki her seye giris acdiqdan sora ulasilabilir

// Sadece giris elemeyen istifadecilerin gire bileceyi sehifeler v3 Controllerde tanimlamaq
// public function __construct()
//{
// $this->middleware('guest');
//}  bu zaman bu controllerin icindeki her seye giris acmayan istifadeciler ulasilabilir
// $this->middleware('guest')->except('hesabiBagla');
//bu zaman bu controllerin icindeki her seye giris acmayan istifadeciler ulasilabilir ANCAQ -
// hesabiBagla funksiyasi istisna olmaqla


