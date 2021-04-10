<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // need login to access all this action
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index() {
        // get data from db
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('id','asc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->orderBy('name','asc')->get();
        $pizzas = Pizza::latest()->get( );
        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);


        // $pizzas = [
        //     ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => '29'],
        //     ['type' => 'valcano', 'base' => 'garlic crust', 'price' => '29'],
        //     ['type' => 'vegie', 'base' => 'thin & crispy', 'price' => '29'],
        // ];

        // get data from query string url
        // $name = request('name');
        // $car = request('car');

        // return view('pizzas', [
        //     'pizzas' => $pizzas,
        //     'name' => $name,
        //     'car' => $car 
        // ]);
    }

    public function show($id){
        
        $pizzas = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizzas,]);
        //return view('pizzas.show',['id' => $id]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        //error_log($pizza);
        //error_log(request('toppings'));
        //return request('toppings');
        $pizza->save();
        
        return redirect('/')->with('mssg', 'Thanks for your order!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
