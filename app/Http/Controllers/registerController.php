<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class registerController extends Controller
{
    function index(){
        return view('register');
    }

    function submit (Request $request){
        $data = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new \App\Models\User;
        $user->name = $data['name'];
        $user->sur_name = $data['surname'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $this->validate($request ,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' =>$request->input('password')]))
        {
            return redirect('/home');
        }
        else
        {
            return back()->with('error','login error');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
