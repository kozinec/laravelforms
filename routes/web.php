<?php

use Illuminate\Routing\Router;
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

Route::get('/', 'IndexController')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'as' => 'myblog.',
    'namespace' => 'MyBlog',
    'prefix' => '/myblog',
], function (Router $route) {
    $route->get('/', 'Post@index')->name('index');

    $route->get('/create', 'Post@create')->name('create');
    $route->post('/create', 'Post@store')->name('store');

    $route->get('/view/{id}', 'Post@show')->name('show');

    $route->get('/update/{id}', 'Post@edit')->name('edit');
    $route->put('/update/{id}', 'Post@update')->name('update');

    $route->delete('/destroy/{id}', 'Post@destroy')->name('destroy');

    $route->get('/newcreate', 'Post@newcreate')->name('newcreate');
    $route->get('/supernewcreate', 'Post@supernewcreate')->name('supernewcreate');
    $route->get('/superpupernewcreate', 'Post@superpupernewcreate')->name('superpupernewcreate');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
