<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function index()
    {
        //
        return view('car.index', ['car' => Car::paginate(15)]);

    }
    public function create()
    {
        //
        return view('car.create');

    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'country' => 'required',
            'num_car' => 'required',
            'color' => 'required',
            'type' => 'required',

        ]);

        $reqData = $request->all();

        Car::create($reqData);
        return redirect()->route('car.index')->withStatus(__('Car added successfully.'));


    }

    public function edit(Request $request)
    {

        $car = Car::where('num_car',$request->num_car)->where('country',$request->country)->first();

        return view('car.edit', ['car' => $car]);
    }
    public function destroy(Request $request)
    {
        //
        $car = Car::where('num_car',$request->num_car)->where('country',$request->country)->delete();

        return redirect()->route('car.index')->withStatus(__('Car deleted successfully.'));
    }

}
