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

// Route::get('/{id}', function ($id) {
//   //  echo $name;
//     return view('index');
// });

Route::get('/','user@Myfunction');
Route::get('/photo','user@Photo');
Route::get('/about','user@About');
Route::get('/contact','user@Contact');
Route::get('/{name}','user@Myfunction');




