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
    return view('welcome', [
        'website' => 'wangkekai.cn'
    ]);
});

Route::get('/hello', function() {
    return 'Hello, welcome to wangkekai.cn';
});

Route::match(['get', 'post'], 'foo', function() {
    return 'This is a request from get or post';
});

Route::redirect('/here', '/there');

Route::get('posts/{post}/comments/{comment}', function($postId, $commentId) {
    return $postId . '--' . $commentId;
});

Route::get('user/{id}', function ($id) {
    // $id 必须是数字
})->where('id', '[0-9]+');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});

Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="/hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="/hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});

Route::post('hello_from_form', function (){
   return 'hello laravel!';
});

Route::get('user/{id}', 'UserController@show');

// Route::get('user/{id}', 'ShowProfile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
