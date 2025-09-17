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

Route::get('/welocome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('bheem.home');
});

Route::get('/realestate', function () {
    return view('bheem.realestate');
});

Route::get('/content', function () {
    return view('bheem.content');
});
Route::get('/others', function () {
    return view('bheem.Others');
});

Route::get('/hotel-info', function () {
    return view('bheem.hotelinfo');
});
Route::get('/city-info', function () {
    return view('bheem.cityinfo');
});

Route::get('/property-info', function () {
    return view('bheem.Propertyinfo');
});
Route::get('/matrimoianl-info', function () {
    return view('bheem.matrimoianlinfo');
});
Route::get('/match-info', function () {
    return view('bheem.Matchinfo');
});

Route::get('/person-info', function () {
    return view('bheem.Personinfo');
});



