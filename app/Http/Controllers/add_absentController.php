<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class add_absentController extends Controller
{
    public function index()
    {
        if(Auth::user()->confirmed == 3)
        {
            $groups = DB::table('teache')
            ->join('groupes','id','=','groupe_id')
            ->where('teacher_id',Auth::user()->id)
            ->get()->groupBy('year');
            return view('app.admin.add_absent' , ['groups' => $groups]);
        }
        $groups = DB::table('groupes')->get()->groupBy('year');
        return view('app.admin.add_absent' , ['groups' => $groups]);
    }
    public function groupe(Request $request)
    {
        $students = DB::table('students')->where('groupe_id',$request->groupe_id)->join('users', 'users.id', '=', 'students.user_id')->get();

        $group = DB::table('groupes')->where('id',$request->groupe_id)->first();
        $classes = DB::table('classes') ->select('name')->where('year',$group->year)->where('speciality',$group->speciality)->get();

        return view('app.admin.add_groupe_absent' , ['students' => $students , 'classes' => $classes]);
    }

    public function submit_add_absent(Request $request)
    {
        if($request->absent == null)
        return redirect()->back()->with('success', 'No absents');

        foreach($request->absent as $student_id)
        {
            $absent_id = DB::table('absents')->insertGetId([
                'student_id' => $student_id,
                'by_id' => Auth::user()->id,
                'class' => $request->class,
                'absent_date' => $request->absent_date,
            ]);

            //check if exist valid justification
            $serach_just = DB::table('justifications')
            ->where([
                ['student_id','=', $student_id]
                ,['start_date','<=', $request->absent_date]
                ,['end_date','>=', $request->absent_date]
                ])->first();

            if($serach_just != null)
            {
                DB::table('absents')
                ->where('id',$absent_id)
                ->update([
                    "just_id" => $serach_just->id,
                ]);
            }
        }
        return redirect()->back()->with('success', 'Absents added successfully');
    }
}
