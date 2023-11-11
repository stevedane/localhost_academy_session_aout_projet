<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\User;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations=Location::all();
        return view('locations.index',['locations'=>$locations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_car'=>'required',
            'id_customer'=>'required',
            'id_payment'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'prix'=>'required'
        ]);
        $location=new Location();
        $location->id_car=$request->id_car;
        $location->id_payment=$request->id_payment;
        $location->id_customer->Auth::user()->id;
        $location->start_date=$request->start_date;
        $location->end_date=$request->end_date;
        $location->prix=$request->prix;
        $location->save();
        return redirect()->route('locations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
        return view('locations.show',['location'=>$location]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
        return view('locations.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
        $request->validate([
            'id_car'=>'required',
            'id_payment'=>'required',
            'id_customer'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'prix'=>'required'
        ]);
        
        $car=$request->input('id_car');
        $location->id_customer->Auth::user()->id;
        $location->id_payment=$request->id;
        $start_date=$request->input('start_date');
        $start_date=$request->input('end_date');
        $prix=$request->input('prix');
        $car->id_car= $location ?? $request->id_car;
        $location->start_date= $location ?? $request->start_date;
        $location->end_date= $location ?? $request->end_date;
        $location->prix= $location ?? $request->prix;
        $location->save();
        return redirect()->route('locations.index');
    }
        
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
        $location->delete();
        return redirect()->route('locations.index');
    }
}
