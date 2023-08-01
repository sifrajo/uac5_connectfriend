<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email:dns|unique:users',
            'instagram' => 'required|regex:/^@.+/',
            'gender' => 'required',
            'phone' => 'required|regex:/^[0-9]+$/',
            'hobbies' => 'required'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/payment');
    }

    public function payment(Request $request){
        $wallet = $request->wallet;
        $rand = $request->rand;

        // if($wallet == $rand){
            return redirect('/login')->with('registerSuccess', 'You success register');
        // }
        // else if($wallet < $rand){
        //     return redirect('/payment')->with('underPaid', 'You are still underpaid');
        // }
        // else{
        //     return redirect('/payment')->with('overPaid', 'Sorry you overpaid, would you like to enter a balance');
        // }
    }

    public function login(Request $request){
        $validateData = $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);

        if(Auth::attempt($validateData)){
            $request->session()->regenerate();
            return redirect('/casual');
        }

        return redirect()->back()->with('loginError', 'Login failed');

    }
}
