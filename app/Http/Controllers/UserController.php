<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function casualidx(){
        $myId = auth()->user()->id;
        $users = User::whereNotIn('id', [$myId])->get();

        return view('casual.home', compact('users'));
        // return view('participant.home');
    }

    public function topup (Request $request){
        $user = User::find(auth()->user()->id);

        $user->wallet = $user->wallet + $request->wallet;
        $user->update();

        return redirect('/casual');
    }

    public function friend(){
        return redirect('/friend');
    }

}
