<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view("roles.index", compact("roles"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("roles.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'description'=> 'required',
            'code_unique'=> 'required|unique:roles,code_unique',
        ]);
        $role = new Role();
        $role->nom =  $request->input("nom");
        $role->description = $request->input("description");
        $role->code_unique= $request->input("code_unique");
        $role->save();
        return redirect()->route('roles.index')->with('success','');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'nom'=> 'nullable',
            'description'=>'nullable',
            'code_unique'=>['nullable',Rule::unique('roles')->ignore($role->id)]]);

        $role->nom=$request->input('nom') ?? $role->nom;
        $role->description = $request->input('description') ?? $role->description;
        $role->code_unique= $request->input['code_unique'] ?? $role->code_unique;
        $role->save();
        return redirect()->route('roles.index');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success','');
        //
    }
}
