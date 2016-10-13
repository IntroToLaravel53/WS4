<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Symfony\Component\HttpFoundation\Response;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/* option 1
Route::get('/brands', function () {
    $brands = \App\Brand::all();
     return view('brands.show', array("brands" => $brands));

 });
*/


// option 2
Route::get('/brands', 'BrandController@index');


//Route::resource('brands', 'BrandController');