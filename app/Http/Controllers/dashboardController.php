<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
class dashboardController extends Controller
{
    public function index()
    {
        //users count info
        $users[0] = DB::table('users')
        ->where('confirmed',0)
        ->count();

        $users[1] = DB::table('users')
        ->where('confirmed',1)
        ->count();

        $users[2] = DB::table('users')
        ->where('confirmed',2)
        ->count();

        $users[3] = DB::table('users')
        ->where('confirmed',3)
        ->count();

        $users[4] = DB::table('users')
        ->where('confirmed',4)
        ->count();

        //absents
        $all_absents = DB::table('absents')
        ->count();

        $absents = DB::table('absents')
        ->where('absent_date' ,'>=',Carbon::today()->subdays(30))
        ->count();

        $abs_today = DB::table('absents')
        ->where('absent_date' ,'=',Carbon::today())
        ->count();

        $abs_nojust = DB::table('absents')
        ->where('absent_date' ,'>=',Carbon::today()->subdays(30))
        ->where('just_id',null)
        ->count();

        //justification
        $justs = DB::table('justifications')
        ->count();

        $justs_today = DB::table('justifications')
        ->where('created_at' ,'>=',Carbon::today())
        ->count();

        $justs_month = DB::table('justifications')
        ->where('created_at' ,'>=',Carbon::today()->subdays(30))
        ->count();

        //absents justs stats

        $abs_chart = DB::table('absents')
        ->select('absent_date', DB::raw('count(*) as total'))
        ->where('absent_date' ,'>=',Carbon::today()->subdays(30))
        ->groupBy('absent_date')
        ->get();

        $abs_ = [];
        $dates = [];

        foreach($abs_chart as $abs)
        {
            array_push($abs_,$abs->total);
            array_push($dates,$abs->absent_date);
        }

        $just_number = [];
        $dates_just = [];

        $just_chart = DB::table('justifications')
        ->select('created_at', DB::raw('count(*) as total'))
        ->where('created_at' ,'>=',Carbon::today()->subdays(30))
        ->groupBy('created_at')
        ->get();

        foreach($just_chart as $justsc)
        {
            array_push($just_number , $justsc->total);
            array_push($dates_just , substr($justsc->created_at ,0,10));
        }


        //dd($just_c , $dates_just);

        return view('app.admin.dashboard',['users' => $users ,
        'absents' => $absents ,
        'abs_nojust' => $abs_nojust ,
        'abs_today' => $abs_today ,
        'justs' => $justs ,
        'justs_today' => $justs_today,
        'justs_month' => $justs_month ,
        'all_absents' => $all_absents,
        'abs' => $abs_,
        'dates' => $dates,
        'just_number' => $just_number,
        'dates_just' => $dates_just]);
    }
}
