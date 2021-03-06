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

Route::get('/anmeldelser', 'PagesController@anmeldelserPage');

Route::get('/hygge', 'PagesController@hyggePage');

Route::get('/konkurrencer', 'PagesController@konkurrencerPage');

Route::get('/konkurrencer/{urlDescription}', 'KonkurrenceController@konkurrence');

Route::get('/{kategori}/{product}/{id}/{overskrift}', [
    'uses'  =>  'ArticleController@getArticle'
]);

Route::get('/unboxing/{product}', [
    'uses'  =>  'PagesController@fetchUnboxingProductArticles'
]);

Route::get('/anmeldelser/{product}', [
    'uses'  =>  'PagesController@fetchAnmeldelserProductArticles'
]);

Route::get('/hygge/{product}', [
    'uses'  =>  'PagesController@fetchHyggeProductArticles'
]);