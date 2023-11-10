<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeries = Galery::all();
        return view("galery.index", compact("galeries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $request->validate([
            'picture' =>'nullable|image',]);

            $galery = new Galery();

            if($request->hasFile('picture')){
                $picture = $request->file('picture');
    
                $pictureFileName = 'photo' . Str::random(6). '.' . $picture->getClientOriginalExtension();
                
                $path = "galeries/" . $pictureFileName;
                    
                Storage::disk('public')->put($path, file_get_contents($picture));
                
                $galery->picture = $pictureFileName;
            }
    
            $galery->save();
        return redirect()->route('galery.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect()->route('galery.index');
    }
}
