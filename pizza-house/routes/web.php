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

Route::get('/pizzas', function () {
    // get data from db
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => '29'],
        ['type' => 'valcano', 'base' => 'garlic crust', 'price' => '29'],
        ['type' => 'vegie', 'base' => 'thin & crispy', 'price' => '29'],
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});