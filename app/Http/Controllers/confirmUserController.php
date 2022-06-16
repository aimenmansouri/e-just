<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class confirmUserController extends Controller
{
    public function confirm(request $request)
    {
        if($request->type == "admin")
        {
            if(DB::table('users')->where('id',$request->user_id)->get()[0]->confirmed != 0)
            {
                return redirect()->back()->with('error', 'User already confirmed !');
            }

            // add admin
            DB::table('admins')->insert([
                'user_id' => $request->user_id,
                'admin_type' => $request->admin_type,
            ]);

            if($request->admin_type =="system admin")
            {
                DB::table('users')
                ->where('id', $request->user_id)
                ->update(['confirmed' => 1]);
            }
            else
            {
                DB::table('users')
                ->where('id', $request->user_id)
                ->update(['confirmed' => 2]);
            }


            return redirect()->back()->with('confirm', $request->admin_type);
        }

        else if($request->type == "teacher")
        {
            //dd($request->all());
            if(DB::table('users')->where('id',$request->user_id)->get()[0]->confirmed != 0)
            {
                return redirect()->back()->with('error', 'User already confirmed !');
            }
            //add teacher
            DB::table('teachers')->insert([
                'user_id' => $request->user_id,
            ]);
            // connect teacher to groups
            foreach($request->gr as $groupe_id)
            {
                DB::table('teache')->insert([
                    'teacher_id' => $request->user_id,
                    'groupe_id' => $groupe_id,
                ]);
            }
            //confirm teacehr
            DB::table('users')
            ->where('id', $request->user_id)
            ->update(['confirmed' => 3]);

            return redirect()->back()->with('confirm', 'teacher');
        }

        else
        {
            if(DB::table('users')->where('id',$request->user_id)->get()[0]->confirmed != 0)
            {
                return redirect()->back()->with('error', 'User already confirmed !');
            }

            //add student
            //dd($request->all());
            DB::table('students')->insert([
                'user_id' => $request->user_id,
                'groupe_id' => $request->groupe_id,
                'matricule' => $request->matricule,
            ]);

            DB::table('users')
            ->where('id', $request->user_id)
            ->update(['confirmed' => 4]);

            return redirect()->back()->with('confirm', 'student');
        }
    }
}
