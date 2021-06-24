<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/about', function () {
    $test = 'Hello World';
    return $test;
});

Route::get('/about/users', function () {
    return 'test';
});

Route::get('/about/users2/{name}/{name2}',function($name,$name2){
	Echo "Hello $name $name2";
});
*/
Route::get('/about', function () {
    return view('about');
});

Route::get('/member', function () {
    return view('index');
});
