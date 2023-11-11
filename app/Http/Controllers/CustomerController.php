<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index',['users' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create', ['user' => new Customer()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'address' =>'required',
            'phone_number'=>'required|confirmed',
            'history_reservation'=>'required',
        ]);

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->phone_number= $request->input('phone_number');
        $customer->history_reservation= $request->input('history_reservation');
        $customer->save();

        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show',['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit',['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' =>'nullable',
            'address' =>['nullable',Rule::unique('customers')->ignore($customer->id)],
            'phone_number'=>'nullable|confirmed',
            'history_reservation'=>'nullable',
        ]);

        $customer->name = $request->input('name') ?? $customer->name;
        $customer->address = $request->input('address') ?? $customer->address;
        $customer->phone_number = $request->input('phone_number') ?? $customer->phone_number;
        $customer->history_reservation = $request->input('history_reservation') ?? $customer->history_reservation;
        $customer->save();

        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
