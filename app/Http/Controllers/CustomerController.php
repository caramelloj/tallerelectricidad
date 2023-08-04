<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id','desc')->get();

        return view('customers.show', compact('customers'));
    }


    public function getCustomer(Request $request)
    {

        $customers = Customer::searchCustomer($request->customerName)->get();

        return view('customers.show', compact('customers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customerName' => 'required',
            'customerCuit' => 'required',
            'customerAddress' => 'required',
            'customerPhone' => 'required'
        ]);

        $cuit_comprobation = Customer::where('cuit_cuil', $request->customerCuit)->first();

        if ($cuit_comprobation == null){
            Customer::create([
                'name' => $request->customerName,
                'cuit_cuil' => $request->customerCuit,
                'address' => $request->customerAddress,
                'phone' => $request->customerPhone
            ]);
        }else{
            return back()->with('error','Cuit Duplicado');
        }

        return to_route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function editCustomer($id){

        $customer = Customer::where('id', $id)->first();

        return view('customers.edit', compact('customer'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $cliente = Customer::where('id', $id)->first();
        $cliente->name = $request->customerName;
        $cliente->cuit_cuil = $request->customerCuit;
        $cliente->address = $request->customerAddress;
        $cliente->phone = $request->customerPhone;
        $cliente->save();

        return to_route('clientes.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Customer::where('id', $id)->delete();

        $customers = Customer::orderBy('id','DESC')->get();

        return view('customers.show', compact('customers'));

    }
}
