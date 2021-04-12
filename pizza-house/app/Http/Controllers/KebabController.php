<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kebab;

class KebabController extends Controller
{
    public function index(){
        
        $kebabs = Kebab::latest()->get();
        return view('kebabs.index',[
            'kebabs' => $kebabs
        ]);
    }

    public function create(){
        return view('kebabs.create');
    }

    public function store(){
        $kebab = new Kebab();
        
        $kebab->type = request('type');
        $kebab->name = request('name');
        $kebab->toppings = request('toppings');

        $kebab->save();

        return redirect('/')->with('mssg', 'Thank you for your kebab order!'); 
    }

    public function show($id){

        $kebabs = Kebab::findOrFail($id);
        return view('kebabs.show', ['kebab' => $kebabs]);
    }

    public function destroy($id){
        $kebab = Kebab::findOrFail($id);
        $kebab->delete();

        return redirect('/kebabs');

    }
}
