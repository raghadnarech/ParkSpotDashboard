<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Car;
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
        return view('car.index', ['car' => Car::paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('car.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'country' => 'required',
            'num_car' => 'required',
            'type' => 'required',
            'color' => 'required',

        ]);

        $reqData = $request->all();

        Car::create($reqData);
        return redirect()->route('car.index')->withStatus(__('Car added successfully.'));

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


    public function edit(Request $request)
    {
        //
        $car = Car::where('country',$request->country)->where('num_car',$request->num_car)->first();
        $newcar = Car::where('country',$request->country)->where('num_car',$request->num_car)->first();


        return view('car.edit', ['car' => $car,'newcar'=> $newcar]);
    }


    public function update(Request $request,Request $newcar)
    {

        $car = Car::where('country',$request->country)->where('num_car',$request->num_car)->first();
        return $car;
        $reqData = $request->all();


        $car->update($reqData);
        return redirect()->route('car.index')->withStatus(__('Car updated successfully.'));
    }


    public function destroy($country,$num_car)
    {
        //
        $car = Car::where('country',$country)->where('num_car',$num_car)->first();
        $car->delete();
        return redirect()->route('car.index')->withStatus(__('Car deleted successfully.'));
    }
}
