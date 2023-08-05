<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'DESC')->get();

        return view('cars.show', compact('cars'));
    }


    public function getCar(Request $request){

        $cars = Car::searchCar($request->carDomain)->get();

        return view('cars.show', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'domainCar' => 'required',
            'carModel' => 'required',
            'carYear' => 'required',
        ]);

        //get customer data to insert in db
        $customer = Customer::where('id', $request->customerId)->get();

        Car::create([
            'domain' => $request->domainCar,
            'model' => $request->carModel,
            'year' => $request->carYear,
            'customer_id' =>$request->customerId,
            'proprietary_name' => $customer[0]->name,
            'cuit_cuil' => $customer[0]->cuit_cuil
        ]);

        return to_route('vehiculos.index');
    }

    public function editCar($id){

        $car = Car::where('id', $id)->first();

        return view('cars.edit', compact('car'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::where('id', $id)->first();

        return view('cars.create',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();
        $car->domain = $request->carDomain;
        $car->model = $request->carModel;
        $car->year = $request->carYear;
        $car->save();

        return to_route('vehiculos.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::where('id', $id)->delete();

        $cars = Car::orderBy('id', 'DESC')->get();

        return view('cars.show', compact('cars'));
    }
}
