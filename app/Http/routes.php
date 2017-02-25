<?php
use App\Product;
use App\Category;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProductsController@index');

Route::get('/products/{id}', 'ProductsController@show');


Route::get('/home', 'HomeController@index');

Route::get('/category/{category}', 
	['as' => 'catWithProd',
	'uses' => 'ProductsController@showCategoryWithProducts']);


Route::auth();