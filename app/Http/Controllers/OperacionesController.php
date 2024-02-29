<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function create(){

        return view('formulario');

    }
    //public function store(Request $request){

    //     $request->name;
    //     $nume1=$request->name;


    //         $cont=0;

    //       for($k=1;$k<=$nume1;$k++)
    //       {
    //           if($nume1t%$k==0){
    //            $cont++;
    //           }
    //       }
    //       if($cont==2){
    //       return "es primo";
    //       }
    //       else {
    //       return "no es primo";
    //       }

    //    }

 public function store(Request $request){


    $numb1= $request->name1;
    $numb2= $request->name2;
    $numb3= $request->name3;

    $promedio=(($numb1+$numb2+$numb3)/3);
    return "el promedio es: $promedio";


   }

}
