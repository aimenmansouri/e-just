<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class classesController extends Controller
{
    public function index()
    {
        $classes = DB::table('classes')->get();
        $specialities = DB::table('groupes')->select('speciality')->distinct()->get();
        //dd($specialities->all());
        return view('app/admin/add_classe' , ['classes' => $classes , 'specialities' => $specialities]);
    }
    public function add_class(Request $request)
    {
        //dd($request->all());
        DB::table('classes')->insert([
            'name' => $request->name,
            'year' => $request->year,
            'speciality' => $request->speciality,
        ]);

        return redirect()->back()->with('success', 'Class added !');
    }
}
