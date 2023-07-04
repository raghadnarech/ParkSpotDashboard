<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\TypePay;
use Illuminate\Http\Request;

class Type_payController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('typepay.index', ['typepay' => TypePay::paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('typepay.create');

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
            'type' => 'required',
            'cost' => 'required',

        ]);

        $reqData = $request->all();

        TypePay::create($reqData);
        return redirect()->route('typepay.index')->withStatus(__('Type Pay added successfully.'));


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
        $TypePay = TypePay::findOrFail($id);

        return view('typepay.edit', ['typepay' => $TypePay]);
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


        $typepay = TypePay::findOrFail($id);

        $reqData = $request->all();


        $typepay->update($reqData);
        return redirect()->route('typepay.index')->withStatus(__('Type Pay updated successfully.'));
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
        $typepay = TypePay::findOrFail($id);
        $typepay->delete();
        return redirect()->route('typepay.index')->withStatus(__('Type Pay deleted successfully.'));
    }
}
