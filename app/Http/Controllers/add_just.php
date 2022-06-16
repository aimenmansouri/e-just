<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class add_just extends Controller
{
    public function index(Request $request)
    {
        $students = DB::table('students')
        ->join('users' , 'users.id' , 'students.user_id')
        ->join('groupes' , 'groupes.id' , 'students.groupe_id')
        ->orderBy('users.name')
        ->where('users.name', 'like', '%'.$request->search.'%')
        ->orWhere('users.sur_name', 'like', '%'.$request->search.'%')
        ->select('users.name as name' , 'users.sur_name as sur_name' , 'users.id as id' , 'groupes.year as year' , 'groupes.speciality as speciality' , 'groupes.groupe as groupe_num')
        ->get();
        //dd($students->all());
        return view('app.admin.add_just' , ['students' => $students , 'search' => $request->search]);
    }

    public function add_just(Request $request)
    {
        //dd($request->all());
        $pre_hash = $request->student_id . $request->start_date . $request->end_date;
        $code = hash('sha256' , $pre_hash);
        $just_id = DB::table('justifications')->insertGetId([
            'code' => $code,
            'student_id' => $request->student_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'by_id' => Auth::user()->id,
            'cause' => $request->cause,
            'created_at' => \Carbon\Carbon::today(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('absents')
        ->where([
        ['student_id','=', $request->student_id]
        ,['absent_date','>=', $request->start_date]
        ,['absent_date','<=', $request->end_date]
        ])
        ->update([
            "just_id" => $just_id,
        ]);

        return redirect()->back()->with('success', 'Justification added');
    }
}
