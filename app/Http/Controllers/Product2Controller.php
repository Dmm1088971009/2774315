<?php

namespace App\Http\Controllers;

use App\Models\Product2;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    //
    public function create(){

        return view("product2");
}

public function store(Request $request ){

    $producto = new Product2();
    $producto->name=$request->name;
    $producto->code=$request->code;
    $producto->confirmation=$request->confirmation;
    $producto->company=$request->company;
    $producto->phone=$request->phone;
    $producto->save();

    return $producto;

}
}
