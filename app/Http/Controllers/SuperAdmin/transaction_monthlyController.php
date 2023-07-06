<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\TransactionMonthly;
use Illuminate\Http\Request;

class transaction_monthlyController extends Controller
{

    public function index()
    {
        //
        return view('transactionmonthly.index', ['transactionmonthly' => TransactionMonthly::paginate(15)]);

    }


    public function create()
    {
        return view('transactionmonthly.create');

        //
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'bookmonthly_id' => 'required',
            'typepay_id' => 'required',
            'cost' => 'required',
            'date' => 'required',
            'walletadmin_id' => 'required',
        ]);

        $TransactionMonthly=new TransactionMonthly();
        $TransactionMonthly->bookmonthly_id=$request->input('bookmonthly_id');
        $TransactionMonthly->typepay_id = $request->input('typepay_id');
        $TransactionMonthly->cost = $request->input('cost');
        $TransactionMonthly->date = $request->input('date');
        $TransactionMonthly->walletadmin_id = $request->input('walletadmin_id');


        $TransactionMonthly->save();
        return redirect()->route('transactionmonthly.index')->withStatus(__('Transaction Monthly added successfully.'));

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $transactionmonthly = TransactionMonthly::findOrFail($id);
        return view('transactionmonthly.edit', ['transactionmonthly' => $transactionmonthly]);
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
        $TransactionMonthly = TransactionMonthly::findOrFail($id);
        $TransactionMonthly->bookmonthly_id=$request->input('bookmonthly_id');
        $TransactionMonthly->typepay_id = $request->input('typepay_id');
        $TransactionMonthly->cost = $request->input('cost');
        $TransactionMonthly->date = $request->input('date');
        $TransactionMonthly->walletadmin_id = $request->input('walletadmin_id');


        $TransactionMonthly->update();
        return redirect()->route('transactionmonthly.index')->withStatus(__('Transaction Monthly updated successfully.'));
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
        $transactionmonthly = TransactionMonthly::findOrFail($id);

        $transactionmonthly->delete();

        return redirect()->route('transactionmonthly.index')->withStatus(__('Transaction Monthly deleted successfully.'));
    }
}
