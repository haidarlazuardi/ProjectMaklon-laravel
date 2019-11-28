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
        $maklon_project = \App\maklonProject::get();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();

        return view('dashboards.index',compact('data_project','maklon_project','maklons','data_maklon_pkp','file','count'));
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
            $pkp = DB::table('project')->first();
            $maklon_sementara = $maklon_id;
            $maklons = \App\maklonProject::get()->take(1);
            $trial = DB::table('trials')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            $foodsafe =DB::table('food_safety')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            $mou =DB::table('file')->where([
                ['jenis_file','mou'],
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            $kontrak_kerjasama =DB::table('file')->where([
                ['jenis_file','kontrak_kerjasama'],
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();

            $maklon_project = DB::table('maklon_project')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
                ])->first();

            $legalitas = DB::table('legalitas')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
                ])->first();



            return view('dashboards.detail',compact('trial','pkp','legalitas','maklon_project','project','kontrak_kerjasama','foodsafe','mou','maklons','maklon_sementara','departemen'));
    }
}
