<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\WalletAdmin;
use Illuminate\Http\Request;

class Wallet_AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('walletadmin.index', ['walletadmin' => WalletAdmin::paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('walletadmin.create');

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
            'amount' => 'required',
            'admin_id' => 'required',

        ]);

        $reqData = $request->all();

        WalletAdmin::create($reqData);
        return redirect()->route('walletadmin.index')->withStatus(__('Wallet Admin added successfully.'));


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
        $walletadmin = WalletAdmin::findOrFail($id);

        return view('walletadmin.edit', ['walletadmin' => $walletadmin]);
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


        $walletadmin = WalletAdmin::findOrFail($id);

        $reqData = $request->all();


        $walletadmin->update($reqData);
        return redirect()->route('walletadmin.index')->withStatus(__('Wallet Admin updated successfully.'));
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
        $walletadmin = WalletAdmin::findOrFail($id);
        $walletadmin->delete();
        return redirect()->route('walletadmin.index')->withStatus(__('Wallet Admin deleted successfully.'));
    }
}
