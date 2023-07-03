<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Models\WalletUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Wallet_UserController;


class UserController extends Controller
{

    public function index()
    {
        //
        return view('user.index', ['user' => User::paginate(15)]);

    }


    public function create()
    {
        return view('user.create');

        //
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        $user=new User();
        $user->phone=$request->input('phone');
        $user->name = $request->input('name');
        $user->password=bcrypt($request->input('password'));
        $user->device_token=null;
        $user->save();
        $Wallet_user = app(Wallet_UserController::class);
        $result_wallet=$Wallet_user->create_wallet_user($user->id);

        return redirect()->route('user.index')->withStatus(__('User added successfully.'));

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('user.edit', ['user' => $user]);
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
        $user = User::findOrFail($id);
        $user->phone=$request->input('phone');
        $user->name = $request->input('name');
        $user->password=bcrypt($request->input('password'));
        $user->update();
        return redirect()->route('user.index')->withStatus(__('User updated successfully.'));
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
        $user = User::findOrFail($id);
        $walletuser = WalletUser::where('user_id',$id);
        $user->delete();
        $walletuser->delete();
        return redirect()->route('user.index')->withStatus(__('User deleted successfully.'));
    }
}
