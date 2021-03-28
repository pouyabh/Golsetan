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

Route::get('/', 'DefController@home')->name('home');
Route::get('/admin_profile', 'DefController@admin_profile')->name('admin_profile')->middleware('auth');
Route::get('/client_profile', 'DefController@client_profile')->name('client_profile')->middleware('auth');
Route::get('/form_add_flower', 'FlowerController@add_flower_form')->name('add_flower_form');
Route::post('/save_flower', 'FlowerController@save_flower')->name('save_flower');
Route::get('/Show_flower', 'FlowerController@Show_flower')->name('Show_flower');
Route::get('/delete_flo/{id}/{image}', 'FlowerController@destroy')->name('delete');
Route::get('/edit/{id}', 'FlowerController@edit')->name('edit');
Route::post('edit/update/{id}', 'FlowerController@update')->name('update');
Route::post('logout', 'DefController@logout')->name('logout');
Route::get('form_add_news', 'NewsController@form_add_news')->name('form_add_news');
Route::post('add_news', 'NewsController@add_news')->name('add_news');
Route::get('/Show_news', 'NewsController@Show_news')->name('Show_news');
Route::get('/delete_news/{id}', 'NewsController@destroy')->name('delete');
Route::get('/edit_news/{id}', 'NewsController@edit')->name('edit');
Route::post('edit_news/update/{id}', 'NewsController@update')->name('update');
Route::get('/Show_flowers_for_c', 'FlowerController@Show_flowers_for_c')->name('Show_flowers_for_c');
Route::get('show_news_f_c', 'NewsController@show_news_f_c')->name('show_news_f_c');
Route::get('priceinfo/{id}', 'FlowerController@priceinfo')->name('priceinfo');
Route::post('comment/{id}', 'CommentController@create')->name('addcomment');
//Route::get('/search', 'FlowerController@create')->name('addcomment');
Route::post('search', 'FlowerController@search')->name('search');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
