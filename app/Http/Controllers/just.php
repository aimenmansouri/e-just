<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class just extends Controller
{
    public function index(Request $request)
    {
        $just = DB::table('justifications')
        ->join('users as student' , 'student.id' , 'justifications.student_id')
        ->join('users as added_by' , 'added_by.id' , 'justifications.by_id')
        ->where('student.name', 'like', '%'.$request->search.'%')
        ->orWhere('student.sur_name', 'like', '%'.$request->search.'%')
        ->orwhere('added_by.name', 'like', '%'.$request->search.'%')
        ->orWhere('added_by.sur_name', 'like', '%'.$request->search.'%')
        ->select('justifications.*' ,'student.id as student_id' ,'student.name as student_name' , 'student.sur_name as student_surname' , 'added_by.name as added_by_name' ,'added_by.sur_name as added_by_surname')
        ->get();
        return view('app.admin.just' ,['justs' => $just , 'search' => $request->search]);
    }

    public function delete(Request $request)
    {
        DB::table('justifications')->where('id', $request->just_id)->delete();

        $rest_just = DB::table('justifications')->where('student_id', $request->student_id)->get();
            foreach($rest_just as $just)
            {
                DB::table('absents')
                ->where([
                ['student_id','=', $request->student_id]
                ,['absent_date','>=', $just->start_date]
                ,['absent_date','<=', $just->end_date]
                ])
                ->update([
                    "just_id" => $just->id,
                ]);
            }
        return redirect()->back()->with('success', 'Justification deleted successfully');
    }
}
