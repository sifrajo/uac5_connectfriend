<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function casualidx(){
        // $user = User::where('user_id', auth()->user()->id)->get();
        $users = User::all();

        return view('casual.home', compact('users'));
        // return view('participant.home');
    }



}
