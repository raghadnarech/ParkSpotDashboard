<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\WalletUser;
use Illuminate\Http\Request;

class Wallet_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('walletuser.index', ['walletuser' => WalletUser::paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('walletuser.create');

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
            'user_id' => 'required',

        ]);

        $reqData = $request->all();

        WalletUser::create($reqData);
        return redirect()->route('walletadmin.index')->withStatus(__('Wallet User added successfully.'));


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
        $walletuser = WalletUser::findOrFail($id);

        return view('walletuser.edit', ['walletuser' => $walletuser]);
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


        $walletuser = WalletUser::findOrFail($id);

        $reqData = $request->all();


        $walletuser->update($reqData);
        return redirect()->route('walletuser.index')->withStatus(__('Wallet User updated successfully.'));
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
        $walletuser = WalletUser::findOrFail($id);
        $walletuser->delete();
        return redirect()->route('walletuser.index')->withStatus(__('Wallet User deleted successfully.'));
    }
}
