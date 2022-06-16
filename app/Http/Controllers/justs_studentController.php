<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class justs_studentController extends Controller
{
    public function index()
    {
        $justs = DB::table('justifications')
        ->where('student_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->get();
        return view('app.justs_student' , ['justs' => $justs]);
    }

    public function post_just(Request $request)
    {
        $just = DB::table('justifications')->
        where('id',$request->just_id)
        ->first();
        return view('app.just', ['just' => $just]);
    }

    public function just_byqr($just_qr)
    {
        //dd($just_qr);

        $just = DB::table('justifications')->
        where('code',$just_qr)
        ->first();

        if($just)
        {
            return view('app.just', ['just' => $just]);
        }
        else
        {
            return view('app.nojust');
        }
    }
}
