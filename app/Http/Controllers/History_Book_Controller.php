<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\Zone;

use App\Models\BookHistory;
use App\Models\Car;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class History_Book_Controller extends Controller
{
    public function Get_Book_History(Request $request)
    {
        $Request_user = Auth::guard('user')->user();
        $cars = Car::where('user_id',$Request_user->id)->get();

        foreach($cars as $i){
            $books= BookHistory::where('num_car', $i->num_car)->where('country',$i->country)->get();
        foreach($books as $i){
            $slot = Slot::where('id',$i->slot_id)->first();
            $zone = Zone::where('id', $slot->zone_id)->first();
            $i->park_spot = $slot->num_slot;
            $i->zone_name = $zone->name;
        }
            }

        if($books)
            return $this->returnResponse($books,"You have a History",200);

            return $this->returnResponse('',"error",400);

    }
}
