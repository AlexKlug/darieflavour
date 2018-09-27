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

Route::get('/', 'FrontPageController@welcome');

Route::get('/unboxing', 'PagesController@unboxingPage');

Route::get('/{kategori}/{id}/{overskrift}', [
    'uses'  =>  'ArticleController@getArticle'
]);