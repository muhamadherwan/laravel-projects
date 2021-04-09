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
    return view('welcome');
});

// pizza routes
use App\Http\Controllers\PizzaController;
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);


// Route::get('/pizzas', 'PizzaController@index');
// Route::get('/pizzas/{id}', 'PizzaController@show');

// Route::get('/pizzas', function () {

// // get data from db
// $pizzas = [
// ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => '29'],
// ['type' => 'valcano', 'base' => 'garlic crust', 'price' => '29'],
// ['type' => 'vegie', 'base' => 'thin & crispy', 'price' => '29'],
// ];

// // get data from query string url
// $name = request('name');
// $car = request('car');

// return view('pizzas', [
// 'pizzas' => $pizzas,
// 'name' => $name,
// 'car' => $car 
// ]);
// });

// // route parameter (wildcard)
// Route::get('/pizzas/{id}', function ($id) {
//     return view('details',['id' => $id]);
// });
