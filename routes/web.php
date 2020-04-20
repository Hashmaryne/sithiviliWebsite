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

Route::get('join-us', function()
{
    return view('join-us');
});

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


Route::get('/reset-password/{user}','ResetPasswordsController@displayPage');

Route::post('/reset', 'ResetPasswordsController@postResetPass');
   

