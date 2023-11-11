<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars=Car::all();
        return view('cars.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_brand'=>'required',
            'year'=>'required',
            'gaz'=>'required',
            'sale_price'=>'required',
            'renting_price'=>'required',
            'avaibility'=>'required'
        ]);
        $car=new Car();
        $car->id_brand=$request->id_brand;
        $car->year=$request->year;
        $car->gaz=$request->gaz;
        $car->sale_price=$request->sale_price;
        $car->renting_price=$request->renting_price;
        $car->avaibility=$request->avaibility;
        $car->save();
        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
        return view('cars.show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
        return view('cars.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
        $request->validate([
            'id_brand'=>'nullable',
            'year'=>'nullable',
            'gaz'=>'nullable',
            'sale_price'=>'nullable',
            'renting_price'=>'nullable',
            'avaibility'=>'nullable'
        ]);
        $car=new Car();
        $car->id_brand=$request->input('id_brand');
        $car->year=$request->input('year');
        $car->gaz=$request->input('gaz');
        $car->sale_price=$request->input('sale_price');
        $car->renting_price=$request->input('renting_price');
        $car->avaibility=$request->input('avaibility');
        $car->save();
        return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return redirect()->route('car.index');
    }
}
