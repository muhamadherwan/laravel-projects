<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        // get data from db
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => '29'],
            ['type' => 'valcano', 'base' => 'garlic crust', 'price' => '29'],
            ['type' => 'vegie', 'base' => 'thin & crispy', 'price' => '29'],
        ];

        // get data from query string url
        $name = request('name');
        $car = request('car');

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
            'car' => $car 
        ]);
    }

    public function show($id){
        return view('details',['id' => $id]);
    }
}
