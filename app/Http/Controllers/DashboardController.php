<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Project;
use Auth;
use App\maklonProject;
use \App\Maklon;
use DB;
use \App\MaklonPkp;
use Carbon;
use Session;
use Mail;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $count = Project::count();
        $data_project = DB::table('project')->get();
        $data_maklon_pkp = Maklon::all();
        // $maklons = DB::table('maklon_project')->get();
        // maklonProject::all();
        $maklon_project = \App\maklonProject::get();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        // dd($maklon_project);

        return view('dashboards.index',compact('data_project','maklon_project','data_maklon_pkp','file','count'));
    }

    public function detail($id,$maklon_id)
    {

        // $project = Project::findOrfail($id)->first();

        // $maklon = Maklon::findOrfail($id)->first();
        // $departemen = \App\departemen::all();
        $departemen = \App\departemen::orderBy('id', 'ASC')->get();
    // $departemen = DB::table('departemen')->where([
    //     ['nama_departemen', $name],
    //     ['aktifitas', $aktifitas]

    // ]) ->get();;
            $project = $id;
            $maklon_sementara = $maklon_id;
            $maklons = maklonProject::all();
    //    dd($maklons);
            $maklon_project = DB::table('maklon_project')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            return view('dashboards.detail',compact('maklon_project','project','maklons','maklon_sementara','departemen'));
    }
}
