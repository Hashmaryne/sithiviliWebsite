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
    return view('index');
});

Route::get('about-us', function()
{
    return view('about-us');
});

// Route::get('join-us', function()
// {
//     return view('join-us');
// });

Route::get('download', function()
{
    return view('download');
});

Route::get('thank-you', function()
{
    return view('thank-you');
});

Route::get('contact-us', function()
{
    return view('contact-us');
});

Route::get('error-message', function()
{
    return view('error-message');
});

Route::get('/reset-password/{user}','ResetPasswordsController@displayPage');

Route::post('/reset', 'ResetPasswordsController@postResetPass');

Route::get('downaload#join-us', 'JoinFormController@create')->name('join.create');
Route::post('downaload#join-us', 'JoinFormController@store')->name('join.store');
   
Route::get('download#contact-us', 'ContactFormController@create')->name('contact.create');
Route::post('download#contact-us', 'ContactFormController@store')->name('contact.store');
