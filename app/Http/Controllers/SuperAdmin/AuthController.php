<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Car;
use App\Models\Deposite;
use App\Models\Slot;
use App\Models\SuperAdmin;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function Login(Request $request) {
        $rules = [
            "email" => "required|email|max:255|exists:super_admins,email",
            "password" => "required|min:6",
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator);
        }
        $superadmin=SuperAdmin::where('email',$request->input('email'))->first();
       $pass= $request->input('password');
       if(Hash::check($pass, $superadmin->password)){

        $user = User::all();
        $countuser = $user->count();
        $book = Booking::all();
        $countbook = $book->count();
        $zone = Zone::all();
        $countzone = $zone->count();
        $slot = Slot::all();
        $countslot = $slot->count();
        $admin = Admin::all();
        $countadmin = $admin->count();
        $transaction = Transaction::all();
        $counttransaction = $transaction->count();
        $deposit = Deposite::all();
        $countdeposit = $deposit->count();
        $car = Car::all();
        $countcar = $car->count();
        return view("dashboard", compact('countuser', 'countbook', 'countzone', 'countslot', 'countadmin', 'counttransaction', 'countdeposit', 'countcar'));

       }
       return redirect('login')->withErrors("");
    }
}
