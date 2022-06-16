<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class groupsController extends Controller
{
    public function index()
    {
        $groups = DB::table('groupes')->orderBy('year', 'asc')->orderBy('groupe', 'asc')->get();
        return view('app/admin/groups' , ['groups' => $groups]);
    }
    public function add_groupe(Request $request)
    {
        DB::table('groupes')->insert([
            'year' => $request->year,
            'speciality' => $request->speciality,
            'groupe' => $request->groupe_number,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Group added');
    }
}
