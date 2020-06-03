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



Route::get('/admin', function(){
return view('admin.index');
})->middleware(['auth' , 'admin']);

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/products', 'productscontroller@index');
    Route::get('/products/create', 'productscontroller@create');
    Route::post('/products', 'productscontroller@store');
    Route::get('/products/edit/{id}', 'productscontroller@edit');
    Route::put('/products/{id}', 'productscontroller@update');
    Route::delete('/products/{id}', 'productscontroller@destroy');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'productscontroller@show');



