<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\DepositSuperAdmin;
use Illuminate\Http\Request;

class depositsuperadminController extends Controller
{

    public function index()
    {
        //
        return view('depositsuperadmin.index', ['depositsuperadmin' => DepositSuperAdmin::paginate(15)]);

    }


    public function create()
    {
        return view('depositsuperadmin.create');

        //
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'date' => 'required',
            'cost' => 'required',
            'super_admin_id' => 'required',
            'walletadmin_id' => 'required',

        ]);

        $deposite=new DepositSuperAdmin();
        $deposite->date = $request->input('date');
        $deposite->cost = $request->input('cost');
        $deposite->walletadmin_id = $request->input('walletadmin_id');
        $deposite->super_admin_id = $request->input('super_admin_id');
        $deposite->save();
        return redirect()->route('depositsuperadmin.index')->withStatus(__('Deposit added successfully.'));

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $deposite = DepositSuperAdmin::findOrFail($id);
        return view('depositsuperadmin.edit', ['depositsuperadmin' => $deposite]);
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
        $deposite = DepositSuperAdmin::findOrFail($id);
        $deposite->date = $request->input('date');
        $deposite->cost = $request->input('cost');
        $deposite->walletadmin_id = $request->input('walletadmin_id');

        $deposite->super_admin_id = $request->input('super_admin_id');
        $deposite->update();
        return redirect()->route('depositsuperadmin.index')->withStatus(__('Deposit updated successfully.'));
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
        $deposite = DepositSuperAdmin::findOrFail($id);

        $deposite->delete();

        return redirect()->route('depositsuperadmin.index')->withStatus(__('Deposit deleted successfully.'));
    }
}
