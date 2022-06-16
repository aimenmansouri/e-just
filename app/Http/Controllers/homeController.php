<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        // confirmed = 0 => not confirmed
        // confirmed = 1 => system admin
        // confirmed = 2 => secrétaire
        // confirmed = 3 => prof
        // confirmed = 1 => etudiant
        if(Auth::user()->confirmed == 0)
        {
            return view('app.non_conf');
        }
        else if(Auth::user()->confirmed == 4)
        {
            $absents = DB::table('absents')->where('student_id', Auth::user()->id)
            ->join('users', 'users.id', '=', 'absents.by_id')
            ->select('absents.*', 'users.name as by_name' , 'users.sur_name as by_surname')
            ->orderBy('absents.absent_date', 'desc')
            ->get();

            return view('app.home_student' , ['absents' => $absents]);
        }
        else
        {
            return redirect('admin');
        }
    }
}
