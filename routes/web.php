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
Route::get('/hash', function () {
    $hash = Hash::make('admin123');
    return $hash;
});
Auth::routes();

Route::resource('admin', 'AdminController');
Route::resource('teachers', 'TeachersController');
Route::resource('registration', 'RegistrationController');
Route::post('/check', 'PagesController@check');
Route::get('/campout/register', 'PagesController@campout')->name('campout');
Route::get('/registration/success', 'PagesController@confirm')->name('confirm');
Route::post('/registration', 'PagesController@store');
Route::get('/pin', 'PagesController@pin');
Route::get('/home', 'HomeController@index');
Route::get('/checked/{numberOfPins}', 'PagesController@checked');
Route::get('/admin', 'AdminController@index')->name('home');
Route::post('/search', 'SearchController@search');
Route::post('/send', 'PagesController@checked');
Route::get('/generatedPins', 'PagesController@viewPins');
Route::get('/downloadPDF/{id}', 'PdfController@download');

// Route::get('/edit', 'PagesController@edit')->name('home');