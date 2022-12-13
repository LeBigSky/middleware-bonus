<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware(['admin'])->only(['create']);
     }
    public function index()
    {
        $cars= Car::all();
        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= User::find(Auth::user()->id);
        $store = new Car();
        $store->brand = $request->brand;
        $store->color = $request->color;
        $store->user_id = $user->id;
        if( $user->id == 3){
          $store->save(); 
           return redirect()->back();
        }
        else{
            return redirect()->back()->with('danger', "désolé, vous n'avez pas accès a cette fonction");
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
 


    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $user= User::find(Auth::user()->id);
        if($user->id == 1){
          $car->delete(); 
        return redirect('cars');
        }
        else{
            return redirect()->back()->with('danger', "désolé vous n'avez pas accès a cette fonction");
        }
        
        
    }
}
