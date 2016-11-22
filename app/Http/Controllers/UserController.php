<?php

namespace App\Http\Controllers;

use App\ParcelDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request){
        return $request->user();
    }

    public function saveP(Request $request){

        ParcelDetail::create([

            'name'=> $request->name,
            'price' => $request->price,
            'oauth_client_id' => 1,
            'user_id' => 1,
            'agent_id' => 1

        ]);

        return 'You checked out successfully';

    }
}
