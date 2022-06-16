<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class absentsController extends Controller
{
    public function index(Request $request)
    {
        $absents = DB::table('absents')
        ->join('users', 'users.id', '=', 'absents.student_id')
        ->join('users as added', 'absents.by_id', '=', 'added.id')
        ->join('students', 'students.user_id', '=', 'users.id')
        ->join('groupes', 'groupes.id', '=', 'students.groupe_id')
        ->select('absents.*', 'users.name as student_name','users.sur_name as student_surname', 'added.name as by_name','added.sur_name as by_surname', 'groupes.year as groupe_year' , 'groupes.groupe as groupe_num' , 'groupes.speciality as groupe_spec')
        ->orderBy('absents.id', 'desc')
        ->where('users.name', 'like', '%'.$request->search.'%')
        ->orWhere('users.sur_name', 'like', '%'.$request->search.'%')
        ->orWhere('added.name', 'like', '%'.$request->search.'%')
        ->orWhere('added.sur_name', 'like', '%'.$request->search.'%')
        ->get();

        return view('app.admin.absents',['absents'=>$absents , 'search' => $request->search]);
    }

    public function delete_absent(Request $request)
    {
        if(Auth::user()->confirmed == 3)
        {
            $absent = DB::table('absents')->where('id', $request->absent_id)->first();
            if($absent->by_id != Auth::user()->id)
            return redirect()->back()->with('success','Access denied');
        }
        DB::table('absents')->where('id', '=', $request->absent_id)->delete();
        return redirect()->back()->with('success','Absent deleted successfully');
    }
}
