<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repairs = Repair::orderBy('id','desc')->get();

        return view('repairs.show', compact('repairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $car = Car::where('id', $id)->first();

        return view('repairs.create', compact('car'));
    }

    /* Search a repair by domain */

    public function getRepair(Request $request){


        $repairs = Repair::searchRepair($request->carDomain)->get();

        return view('repairs.show', compact('repairs'));
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
            'repair' => 'required'
        ]);

        Repair::create([
            'domain' => $request->carDomain,
            'observations' => $request->repair,
            'car_id' => $request->carId,
        ]);

        return to_route('vehiculos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repairs = Repair::where('car_id', $id)->get();

        return view('repairs.show', compact('repairs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
