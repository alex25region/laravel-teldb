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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/users', function () {
//    return view('users');
//});


Route::get('/admin', function () {
    return view('admin.dashboard');
});

//Route::get('/users2',  function () {
//    return view('admin.users.index2');
//});



//Route::resource('admin.users','TUsersController');





$groupData = [
    'namespace' => 'Admin',
    'prefix' => 'admin'
];

Route::group($groupData, function () {
    //Users
    //$methods = ['index', 'edit', 'store', 'update', 'create'];
    Route::resource('users', 'TUsersController')
        //->only($methods)
        ->names('admin.users');

    //Posts
    Route::resource('posts', 'TPostsController')->names('admin.posts');

    //Otdels
    Route::resource('otdels', 'TOtdelsController')->names('admin.otdels');
});
