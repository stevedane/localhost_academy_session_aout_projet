<?php

namespace App\Http\Controllers;

use App\Models\Access;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $access = Access::orderBy("created_at","desc")->paginate(10);
        return view("access.index", compact("access"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("access.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_user'=> 'required',
            'id_role'=> 'required',
            'user_code'=>'required|unique:accesses,user_code'
        ]);
        $access = new Access();
        $access->id_user = $request->input('id_user');
        $access->id_role = $request->input('id_role');
        $access->user_code = $request->input('user_code');

        $access->save();
        return redirect()->route('access');
    } 

    /**
     * Display the specified resource.
     */
    public function show(Access $access)
    {
        return view('access.show',['access'=>$access]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Access $access)
    {
        return view('access.edit',['access'=>$access]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Access $access)
    {
        $request->validate([

            'id_user'=> 'required',
            'id_role'=> 'required',
            'user_code'=>['nullable',Rule::unique('user_code')->ignore($access->id)]
        ]);
        $access->id_user = $request->input('id_user') ?? $access->id_user;
        $access->id_role = $request->input('id_role') ?? $access->id_role;
        $access->user_code = $request->input('user_code') ?? $access->user_code;

        $access->save();
        return redirect()->route('access');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Access $access)
    {
        $access->delete();
        
        return back();
    }
}
