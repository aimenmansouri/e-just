<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editusercontroller extends Controller
{
    function deleteUSer(Request $request)
    {
        //get user name
        $user_name = DB::table('users')->select('name')->where('id', '=', $request->userId)->get();
        $user_name = $user_name["0"]->name;
        //delete user
        $deleted = DB::table('users')->where('id', '=', $request->userId)->delete();
        return redirect()->back()->with('user_delete',$user_name);
    }
    function confirmeUser(Request $request)
    {
        
    }
}
