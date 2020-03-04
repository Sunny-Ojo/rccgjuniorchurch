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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hash', function () {
    $pass = 'admin123';
    $me = Hash::make($pass);
    return $me;
});
Route::get('/logoutadmin', function () {
    Auth::logout();
    return redirect('/');
})->name('logoutadmin');

Auth::routes();

Route::get('/pinsfromadmins', 'PinsController@getPinsFromEachAdmin');
Route::resource('admin', 'AdminController');
Route::resource('campers', 'CampersController');
Route::resource('teachers', 'TeachersController');
Route::post('/teacherSearch', 'SearchController@teachers');
Route::resource('registration', 'RegistrationController');
Route::post('/check', 'PagesController@check');
Route::get('/campout/register', 'PagesController@campout')->name('campout');
Route::get('/registration/success', 'PagesController@confirm');
Route::post('/registration', 'PagesController@store');
Route::get('/pin', 'PagesController@pin')->middleware('auth');
Route::get('/adminlogin', 'PagesController@adminlogin')->name('adminlogin');
Route::post('/loginverification', 'PagesController@loginverification')->name('loginadmin');
Route::get('/adminregister', 'PagesController@adminregister')->name('adminregister');
Route::post('/registeradmin', 'PagesController@registeradmin')->name('registeradmin');
Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/register/teacher', 'PagesController@teachers');
Route::post('/confirmPin', 'PagesController@confirmPin');
Route::get('/admin', 'AdminController@index')->name('home');
Route::post('/send', 'PagesController@checked')->middleware('auth');
Route::get('/generatedpins', 'PagesController@viewPins')->middleware('auth');
Route::get('/downloadPDF/{id}', 'PdfController@download')->middleware('auth');
Route::get('/download/{id}', 'PdfController@teachers')->middleware('auth');
Auth::routes();