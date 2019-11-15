<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MaklonPkp;
use \App\Maklon;
use App\Project;
use DB;
use Carbon;
use Session;
use Auth;
use Mail;

class PkpagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hold(Request $request)
    {
        $data_project = DB::table('project')->where('status_project', 1)->get();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();


        return view('Project.pkp.hold',['maklons' => $maklons,'data_project' => $data_project,'file' => $file, 'data_maklon_pkp']);
    }

    public function done(Request $request)
    {
        $data_project = DB::table('project')->get();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();

        $maklon_project = \App\maklonProject::all();



        return view('Project.pkp.done',['maklons' => $maklons,'maklon_project' => $maklon_project,'data_project' => $data_project,'file' => $file, 'data_maklon_pkp']);
    }
    public function rejected(Request $request)
    {
        $maklon_project = \App\maklonProject::all();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();

// dd($maklon_project);

        return view('Project.pkp.rejected',['maklons' => $maklons,'maklon_project' => $maklon_project,'file' => $file, 'data_maklon_pkp']);
    }
    public function approve(Request $request)
    {
        $maklon_project = \App\maklonProject::all();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();




        return view('Project.pkp.approve',['maklons' => $maklons,'maklon_project' => $maklon_project,'file' => $file, 'data_maklon_pkp']);
    }
    public function inactive(Request $request)
    {
        $data_project = DB::table('project')->where('status_project','2')->get();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();



        return view('Project.pkp.inactive',['maklons' => $maklons,'data_project' => $data_project,'file' => $file, 'data_maklon_pkp']);
    }

     public function penawaran_approve(Request $request)
    {
        # code...
    }
}
