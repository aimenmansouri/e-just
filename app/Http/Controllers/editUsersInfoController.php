<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editUsersInfoController extends Controller
{
    // indexes
    public function index_admin($id)
    {
        $user_info = DB::table('users')->where('id',$id)->first();
        $admin_info = DB::table('admins')->where('user_id',$id)->first();
        return view('app.admin.edit.admin' , ['user_id' => $id , 'user_info' => $user_info , 'admin_info' => $admin_info]);
    }

    public function index_teacher($id)
    {
        $user_info = DB::table('users')->where('id',$id)->first();
        $teacher_info = DB::table('teachers')->where('user_id',$id)->first();
        $groups = DB::table('groupes')->get();
        $teache =DB::table('teache')->select('groupe_id')->where('teacher_id',$id)->get()->all();
        $teache_array = array();
        foreach($teache as $teach){
            array_push($teache_array,$teach->groupe_id);
        }
        return view('app.admin.edit.teacher' , ['user_id' => $id , 'user_info' => $user_info , 'teacher_info' => $teacher_info , 'groups' => $groups , 'teache' => $teache_array]);
    }

    public function index_student($id)
    {
        $user_info = DB::table('users')->where('id',$id)->first();
        $student_info = DB::table('students')->where('user_id',$id)->first();
        $groups = DB::table('groupes')->get();
        return view('app.admin.edit.student' , ['user_id' => $id , 'user_info' => $user_info , 'student_info' => $student_info , 'groups' => $groups]);
    }

    //edit users info
    public function submit_admin(Request $request)
    {
        if($request->unconfirme_id != null)
        {
            //dd($request->unconfirme_id);
            DB::table('admins')
            ->where('user_id', $request->unconfirme_id)
            ->delete();

            DB::table('users')
            ->where('id', $request->unconfirme_id)
            ->update(['confirmed' => 0]);

            return redirect()->route('users')->with('success', 'User unconfirmed');
        }

        DB::table('users')
            ->where('id', $request->user_id)
            ->update(['name' => $request->name , 'sur_name' => $request->surname]);
        DB::table('admins')
            ->where('user_id', $request->user_id)
            ->update(['admin_type' => $request->admin_type]);

        if($request->admin_type == 'system admin')
        {
            $admin = 1;
        }
        else
        {
            $admin = 2;
        }

        DB::table('users')
            ->where('id', $request->user_id)
            ->update(['confirmed' => $admin]);


        return redirect()->back()->with('success', 'User info updated successfully');
    }

    public function submit_teacher(Request $request)
    {
        if($request->unconfirme_id != null)
        {
            //dd($request->unconfirme_id);
            DB::table('teachers')
            ->where('user_id', $request->unconfirme_id)
            ->delete();

            DB::table('users')
            ->where('id', $request->unconfirme_id)
            ->update(['confirmed' => 0]);

            return redirect()->route('users')->with('success', 'User unconfirmed');
        }

        //dd($request->all());
        DB::table('users')
            ->where('id', $request->user_id)
            ->update(['name' => $request->name , 'sur_name' => $request->surname]);
        DB::table('teache')
            ->where('teacher_id', $request->user_id)
            ->delete();

        foreach($request->gr as $groupe_id)
            {
                DB::table('teache')->insert([
                    'teacher_id' => $request->user_id,
                    'groupe_id' => $groupe_id,
                ]);
            }

        return redirect()->back()->with('success', 'User info updated successfully');
    }

    public function submit_student(Request $request)
    {
        if($request->unconfirme_id != null)
        {
            //dd($request->unconfirme_id);
            DB::table('students')
            ->where('user_id', $request->unconfirme_id)
            ->delete();

            DB::table('users')
            ->where('id', $request->unconfirme_id)
            ->update(['confirmed' => 0]);

            return redirect()->route('users')->with('success', 'User unconfirmed');
        }

        //dd($request->all());
        DB::table('users')
            ->where('id', $request->user_id)
            ->update(['name' => $request->name , 'sur_name' => $request->surname]);
        DB::table('students')
            ->where('user_id', $request->user_id)
            ->update(['matricule' => $request->matricule , 'groupe_id' => $request->groupe_id]);

        return redirect()->back()->with('success', 'User info updated successfully');
    }
}
