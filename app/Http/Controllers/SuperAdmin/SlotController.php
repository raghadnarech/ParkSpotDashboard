<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('slot.index', ['slot' => Slot::paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('slot.create');

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
            'num_slot' => 'required',
            'status' => 'required',
            'zone_id' => 'required',

        ]);

        $reqData = $request->all();

        Slot::create($reqData);
        return redirect()->route('slot.index')->withStatus(__('Slot added successfully.'));


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slot = Slot::findOrFail($id);

        return view('slot.edit', ['slot' => $slot]);
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


        $slot = Slot::findOrFail($id);

        $reqData = $request->all();


        $slot->update($reqData);
        return redirect()->route('slot.index')->withStatus(__('Slot updated successfully.'));
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
        $slot = Slot::findOrFail($id);
        $slot->delete();
        return redirect()->route('slot.index')->withStatus(__('Slot deleted successfully.'));
    }
}
