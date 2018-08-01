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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users','UserController');

Route::resource('/admin/categories','CategorieController');

Route::resource('/admin/tags','TagController');

Route::resource('/admin/skills','SkillController');

Route::resource('/admin/clients','ClientController');

Route::resource('/admin/projects','ProjetController');

Route::resource('/admin/testimonials','TestimonialController');

Route::resource('/admin/atouts','AtoutController');

Route::resource('/admin/services','ServiceController');

Route::resource('/admin/partenaires','PartenaireController');