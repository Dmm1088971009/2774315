<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create(){

        return view("product");

}

public function store(Request $request ){

    $producto = new Product();
    $producto->name=$request->name;
    $producto->school=$request->school;
    $producto->grade=$request->grade;
    $producto->teacher=$request->teacher;
    $producto->save();

    return $producto;

}
}
