<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    //
    public function like(Request $request){
        $friend = new Friend();

        $friend->user_id = $request->user_id;
        $friend->liked_id = $request->liked_id;
        $friend->liked_status = true;
        $friend->save();

        return redirect('/casual');
    }

    public function dislike(Request $request){
        $friend = new Friend();

        $friend->user_id = $request->user_id;
        $friend->liked_id = $request->liked_id;
        $friend->liked_status = true;
        $friend->save();

        return redirect('/casual');
    }
}
