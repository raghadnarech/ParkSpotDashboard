<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Deposite;
use Illuminate\Http\Request;

class depositeController extends Controller
{

    public function index()
    {
        //
        return view('deposite.index', ['deposite' => Deposite::paginate(15)]);

    }


    public function create()
    {
        return view('deposite.create');

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

        $deposite=new Deposite();
        $deposite->date = $request->input('date');
        $deposite->cost = $request->input('cost');
        $deposite->walletadmin_id = $request->input('walletuser_id');
        $deposite->walletadmin_id = $request->input('walletadmin_id');
        $deposite->save();
        return redirect()->route('deposite.index')->withStatus(__('Deposit added successfully.'));

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $deposite = Deposite::findOrFail($id);
        return view('deposite.edit', ['deposite' => $deposite]);
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
        $deposite = Deposite::findOrFail($id);
        $deposite->date = $request->input('date');
        $deposite->cost = $request->input('cost');
        $deposite->walletadmin_id = $request->input('walletuser_id');
        $deposite->walletadmin_id = $request->input('walletadmin_id');
        $deposite->update();
        return redirect()->route('deposite.index')->withStatus(__('Deposit updated successfully.'));
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
        $deposite = Deposite::findOrFail($id);

        $deposite->delete();

        return redirect()->route('deposite.index')->withStatus(__('Deposit deleted successfully.'));
    }
}
