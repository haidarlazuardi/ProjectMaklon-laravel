<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MaklonPkpController extends Controller
{
    public function index(Request $request)
    {
        $maklon_project = DB::table('project')
        ->get();
        return view('Project.index',['data_maklon_project' => $data_maklon_project,'data_project' => $data_project, 'data_maklon' => $data_maklon ]);
    }

    public function info($id)
    {
        
        $project = DB::table('project')
        ->get();
        return view('Project.info',compact('project'));
    }
}
