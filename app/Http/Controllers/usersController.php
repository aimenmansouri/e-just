<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    function index(Request $request)
    {
        $users = DB::table('users')
        ->orderBy('confirmed', 'asc')
        ->orderBy('name', 'asc')
        ->where('name', 'like', '%'.$request->search.'%')
        ->orWhere('sur_name', 'like', '%'.$request->search.'%')
        ->get();

        //$search = ''.$request->search;

        //dd($users); //groupes_spespecial to be del after confirming
        $groupes_spespecial = DB::table('groupes')->select('speciality')->distinct()->get();
        $groups = DB::table('groupes')->get();
        return view('app\admin\add_user', ['users' => $users , 'groupes_spespecial' => $groupes_spespecial , 'groups' => $groups , 'search' => $request->search]);
    }
}
