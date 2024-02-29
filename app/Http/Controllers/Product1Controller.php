<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Product1;
use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    //
    public function create(){

        return view("product1");
    }

    public function store(Request $request ){

        $producto = new Product1();
        $producto->name=$request->name;
        $producto->edad=$request->edad;
        $producto->telefono=$request->telefono;
        $producto->ciudad=$request->ciudad;
        $producto->save();

        return $producto;

}

}
