<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Project;
use Auth;
use App\maklonProject;
use \App\Maklon;
use DB;
use \App\File;
use \App\MaklonPkp;
use Carbon;
use Session;
use Mail;
use App\Mail\ResetPkp;
use App\Notifications\NotifyReset;
class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $count = Project::count();
        $data_project = DB::table('project')->get();
        $data_maklon_pkp = Maklon::all();
        $maklon_project = \App\maklonProject::get();
        $maklons = \App\maklonProject::get();
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
            $maklins = \App\maklonProject::where([
                ['project_id',$id],
                ['maklon_id',$maklon_id],
            ])->get();
            $maklons = \App\maklonProject::get()->take(1);
            $trial = DB::table('trials')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            $foodsafe =DB::table('food_safety')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            $mou =DB::table('mous')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();
            $kontrak_kerjasama =DB::table('kontrak_kerjasamas')->where([
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
            return view('dashboards.detail',compact('trial','pkp','legalitas','maklins','maklon_project','project','kontrak_kerjasama','foodsafe','mou','maklons','maklon_sementara','departemen'));
    }
    public function tabular($id)
    {
        $project = $id;
        $pkp = DB::table('project')->first();
        $maklons = \App\maklonProject::where('project_id',$id)->get()->take(1);
        // $maklins = maklonProject::with('file')->where('project_id',$id)->get();
        // $maklins = DB::table('maklon_project')
        // ->join(
        //     'file'.'files.project_id','maklon_project.project_id'
        // )->get();
        // dd($maklins);
        $maklins = DB::table('maklon_project')
        ->leftJoin('project','project.id' ,'maklon_project.project_id')
        ->leftJoin('food_safety','food_safety.project_id', 'maklon_project.project_id')
        ->leftJoin('mous','mous.project_id','maklon_project.project_id')
        ->leftJoin('Maklon','Maklon.id','maklon_project.project_id')
        ->leftJoin('penawarans','penawarans.project_id','maklon_project.project_id')
        ->get();
        // dd($maklins);
            // dd($makls);

        $foodsafe =DB::table('food_safety')->where([
            ['project_id', $id],
                    ])->first();
        $mou =DB::table('mous')->where([
            ['project_id', $id],
                    ])->first();
        $kontrak_kerjasama =DB::table('kontrak_kerjasamas')->where([
            ['project_id', $id],
                    ])->first();
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id]])->get();
        $legalitas = DB::table('legalitas')->where([
            ['project_id', $id],
                        ])->first();
// dd($maklins);
            return view('dashboards.tabular',compact('trial','pkp','legalitas','maklins','maklon_project','project','kontrak_kerjasama','foodsafe','mou','maklons','maklon_sementara','departemen'));
    }

    public function deletemaklonproject($id)
    {

        $maklins = \App\maklonProject::find($id);
        // $maklins = \App\::find($id);
        $maklins->delete ($maklins);
        return redirect()->back();
    }

    public function resetpkp( Request $request ,$project_id)
    {
        // $message = $request->message;
        $maklon_project = maklonProject::findOrFail($project_id);
        $maklon_project->update([
        'status_approval' => 1,
        'status_harga' => 1,
        'status_dokumen'=>1,
        'status_mou'=>1,
        'status_trial'=>1,
        'status_food'=>1,
        ]);
        $maklon_project->message = $request->message;
        $maklon_project->email = auth::user()->email;
        $maklon_project->notify(new NotifyReset($maklon_project));

        // dd($message);

 return redirect()->back();

}
}
