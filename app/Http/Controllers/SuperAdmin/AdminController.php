<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wallet_AdminController;
use App\Models\Admin;
use App\Models\WalletAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.index', ['admin' => Admin::paginate(15)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');

        //
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
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'zone_id' => 'required',

        ]);

        $admin=new Admin();
        $admin->phone=$request->input('phone');
        $admin->name = $request->input('name');
        $admin->password=bcrypt($request->input('password'));
        $admin->zone_id=$request->input('zone_id');
        $admin->device_token=null;
        $admin->save();
        $Wallet_Admin = app(Wallet_AdminController::class);
        $result_wallet=$Wallet_Admin-> create_wallet_Admin($admin->id);
        // $reqData = $request->all();

        // Admin::create($admin);
        return redirect()->route('admin.index')->withStatus(__('Admin added successfully.'));

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
        $admin = Admin::findOrFail($id);
        return view('admin.edit', ['admin' => $admin]);
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
        $admin = Admin::findOrFail($id);
        $admin->phone=$request->input('phone');
        $admin->name = $request->input('name');
        $admin->password=bcrypt($request->input('password'));
        $admin->zone_id=$request->input('zone_id');
        $admin->update();
        return redirect()->route('admin.index')->withStatus(__('Admin updated successfully.'));
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
        $admin = Admin::findOrFail($id);
        $walletadmin = WalletAdmin::where('admin_id',$id);
        $admin->delete();
        $walletadmin->delete();
        return redirect()->route('admin.index')->withStatus(__('Admin deleted successfully.'));
    }
}
