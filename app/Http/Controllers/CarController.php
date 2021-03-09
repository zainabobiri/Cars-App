<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * method that creates new car
     * 
     * 
     * amespace App\Http\Controllers;

 
     */
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    

    public function create(Request $request){
        $car= Car::all();
    return view('index', compact('car','layout'));
    }
        
 
          

    public function store(Request $request)
    {
        $car= new Car();
        //dd($request->make);
        $car->make=$request->input('make');
        $car->model=$request->input('modelno');
        $car->produced_on=$request->input('producedon');
        

        
        $car->save();
       // dd($car);
        return redirect('/');
    }
}



 