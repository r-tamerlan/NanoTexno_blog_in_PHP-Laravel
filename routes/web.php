<?php

use Illuminate\Support\Facades\Route;


Route::view('/contact','contact')->name('contact');
Route::view('/about','about')->name('about');

Route::get('/','HomepageController@index')->name('homepage');
Route::match(['get','post'],'/search','SearchController@index')->name('search');


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
    Route::redirect('/','admin/login');

    Route::match(['get','post'],'/login','AdminController@login')->name('admin.login');
    Route::get('/logout','AdminController@logout')->name('admin.logout');

//    Route::group(['middleware'=> 'admin'],function (){
    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');

    // ***- Categories -***
    Route::group(['prefix'=>'categories'],function (){
       Route::match(['get','post'],'/','CategoriesController@index')->name('admin.categories.index');
       Route::get('/new','CategoriesController@form')->name('admin.categories.new');
       Route::get('/edit/{id}','CategoriesController@form')->name('admin.categories.edit');
       Route::post('/save/{id?}','CategoriesController@save')->name('admin.categories.save');
       Route::get('/delete/{id}','CategoriesController@delete')->name('admin.categories.delete');
    });

    // ***- Posts -***
    Route::group(['prefix'=>'posts'],function (){
        Route::match(['get','post'],'/','PostsController@index')->name('admin.posts.index');
        Route::get('/new','PostsController@form')->name('admin.posts.new');
        Route::get('/edit/{id}','PostsController@form')->name('admin.posts.edit');
        Route::post('/save/{id?}','PostsController@save')->name('admin.posts.save');
        Route::get('/delete/{id}','PostsController@delete')->name('admin.posts.delete');
    });

    // ***- PostsInfo -***
    Route::group(['prefix'=>'info'],function (){
        Route::match(['get','post'],'/','PostsController@indexInfo')->name('admin.info.index');
        Route::get('/new','PostsController@formInfo')->name('admin.info.new');
        Route::get('/edit/{id}','PostsController@formInfo')->name('admin.info.edit');
        Route::post('/save/{id?}','PostsController@saveInfo')->name('admin.info.save');
        Route::get('/delete/{id}','PostsController@deleteInfo')->name('admin.info.delete');
    });

    // ***- Users -***
    Route::group(['prefix'=>'users'],function (){
        Route::match(['get','post'],'/','UsersController@index')->name('admin.users.index');
        Route::get('/delete/{id}','UsersController@delete')->name('admin.users.delete');
    });

    // ***- Admins -***
    Route::group(['prefix'=>'admins'],function (){
        Route::match(['get','post'],'/','AdminController@indexAdmins')->name('admin.admins.index');
        Route::get('/new','AdminController@form')->name('admin.admins.new');
        Route::get('/edit/{id}','AdminController@form')->name('admin.admins.edit');
        Route::post('/save/{id?}','AdminController@save')->name('admin.admins.save');
        Route::get('/delete/{id}','AdminController@delete')->name('admin.admins.delete');
    });


//    });


});




// For Email content test
Route::get('test/mail',function (){
    $user=\App\Models\User::find(2);
    return new App\Mail\UserSignUpMail($user);
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
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


