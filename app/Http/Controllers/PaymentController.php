<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view("payment.index", compact("payments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("payment.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'montant'=>'required',
            'reference'=>'required',
            'system'=>'required',
            'number'=> 'required|unique:payments,number',
        ]);

        $montant = $request->input('montant');
        $reference = $request->input('reference');
        $system = $request->input('sytem');
        $number = $request->input('number');

        $payment = new Payment();
        $payment->montant=$montant;
        $payment->reference=$reference;
        $payment->system=$system;
        $payment->number=$number;
        $payment->save();
        return redirect()->route('payment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('payment.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view('payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'montant'=>'nullable',
            'reference'=>'nullable',
            'system'=>'required',
            'number'=> ['require',Rule::unique('payments')->ignore($payment->id)],
        ]);

        $montant = $request->input('montant');
        $reference = $request->input('reference');
        $system = $request->input('sytem');
        $number = $request->input('number');

        $payment->montant=$montant ?? $payment->montant;
        $payment->reference=$reference ?? $payment->reference;
        $payment->system=$system ?? $payment->system;
        $payment->number=$number ?? $payment->number=$number;
        $payment->save();
        return redirect()->route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect(route('payment.index'))->with('success','');
    }
}
