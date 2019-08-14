<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MaklonPkp;
use \App\Maklon;
use DB;
use Carbon;
use Session;
class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $data_project = DB::table('project')->get();
        

        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = Maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();
        return view('Project.index',['maklons' => $maklons,'data_project' => $data_project,'file' => $file, 'data_maklon_pkp' => $data_maklon_pkp, 'data_file' => $data_file ]);
    }

    // Data Maklon
    public function showMaklon($id)
    {
        $maklonProject = DB::table('maklon_project')->where('project_id', $id)->get();
        $maklon = \App\Maklon::all();
        return [$maklonProject, $maklon];
    }

    public function saveMaklon(Request $request)
    {
        

    //    $maklon = DB::table('maklon')->whereIn('nama_maklon', $request->maklon)->get();
    //    Session::put('maklon', $request->maklon);
    //    Session::put('allMaklon',$maklon);

       DB::table('table_sementara')->insert([
        "maklon_id" => $request->maklon,
        "project_id"=> $request->project_id,
        ]);

       return back();
    }

    public function create(Request $request)
    {
        $data_project = DB::table('project')->get();
        return view('Project.insert',compact('data_project'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_project' => 'required',
            'kategori_project' => 'required',
            'forecast' => 'required',
            'pricelist' => 'required',
            'nama_brand' => 'required',
            'gramasi' => 'required',
            'konfigurasi_kemas' => 'required',
            'umur_simpan' => 'required',
            'gambaran_proses' =>'required',
            'urgensi_project' =>'required',
        ]);
         $projek = \App\Project::create([
            "nama_project" => $request->nama_project,
            "kategori_project" => $request->kategori_project,
            "forecast" => $request->forecast,
            "pricelist" => $request->pricelist,
            "nama_brand" => $request->nama_brand,
            "gramasi" => $request->gramasi,
            "satuan" => $request->satuan,
            "konfigurasi_kemas" => $request->konfigurasi_kemas,
            "umur_simpan" => $request->umur_simpan,
            "gambaran_proses" => $request->gambaran_proses,
            "urgensi_project" => $request->urgensi_project,
            "timeline" => $request->file,
            ]);
            if($request->hasFile('timeline')){
                $request->file('timeline')->move('images/',$request->file('timeline')->getClientOriginalName());
                $projek->timeline = $request->file('timeline')->getClientOriginalName();
                $projek->save();
            }
            return redirect('/project')->with('sukses', 'Data Berhasil di Input');
        }


    public function info($id)
    {
        $mou = DB::table('file')
                ->where('jenis_file','mou')
                ->get();
                
        $project = DB::table('project')->where('id',$id)->get();
        $project1 = DB::table('project')->where('id',$id)->first();

        return view('Project.wizard.info',compact('mou','project1','project'));
    }

    public function info_maklon($id)
    {
        
        $data_maklon = DB::table('maklon')->get();
        $project = DB::table('project')->where('id',$id)->get();
        $maklon_sementara = DB::table('table_sementara')
        ->join('maklon','table_sementara.maklon_id','=','maklon.id')->where('project_id',$id)
        ->get();
        return view('Project.wizard.info2',compact('data_maklon', 'project','maklon_sementara'));
    }

    public function info_releted($id,$maklon_id)
    {
       
        $project = DB::table('project')->where('id',$id)->get();
        $maklon = DB::table('table_sementara')->where('maklon_id',$maklon_id)->where('project_id',$id)->get();
        $maklon_sementara = DB::table('table_sementara')
        ->join('maklon','table_sementara.maklon_id','=','maklon.id')->where('maklon_id',$maklon_id)
        ->get();
        $maklon_project = DB::table('maklon_project')->where('project_id',$id)->where('maklon_id',$maklon_id)->get();
        // $filed = DB::table('file')
        // ->join('maklon_project','file.project_id','=','maklon_project.id')
        // ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        // ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        // ->get();
        // $file = DB::table('file')->where('jenis_file','cpm')
        // ->get();
        // $file2 = DB::table('file')->where('project_id',$maklon_id)->where('jenis_file','penawaran')
        // ->get();
        // $file3 = DB::table('file')->where('project_id',$maklon_id)->where('jenis_file','ppt_penjajakan')
        // ->get();
        return view('Project.wizard.info3',compact('project','maklon_sementara', 'maklon','maklon_project'));
    }

    public function info_legalitas($id , $maklon_id)
    {
        $project = DB::table('project')->where('id',$id)->get();
        $maklon_sementara = DB::table('table_sementara')
        ->join('maklon','table_sementara.maklon_id','=','maklon.id')->where('maklon_id',$maklon_id)
        ->get();

        $legal = DB::table('file')->where('jenis_file','legalitas')
        ->join('maklon_project','file.project_id','=','maklon_project.id')
        ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        ->get();

        return view('Project.wizard.info4',compact('project', 'legal', 'maklon_sementara'));
    }

    public function info_mou($id, $maklon_id)
    {
        $project = DB::table('project')->where('id', $id)->get();
        $maklon_sementara = DB::table('table_sementara')
        ->join('maklon','table_sementara.maklon_id','=','maklon.id')->where('maklon_id',$maklon_id)
        ->get();

        $mou = DB::table('file')->where('jenis_file','mou')
        ->join('maklon_project','file.project_id','=','maklon_project.id')
        ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        ->get();

        return view('Project.wizard.info5', compact('project', 'mou', 'maklon_sementara'));
    }

    public function info_trial($id, $maklon_id)
    {
        
        $project = DB::table('project')->where('id', $id)->get();
        $maklon_sementara = DB::table('table_sementara')
        ->join('maklon','table_sementara.maklon_id','=','maklon.id')->where('maklon_id',$maklon_id)
        ->get();
        return view('Project.wizard.info6', compact('project', 'maklon_sementara'));
    }

    public function info_pendukung($id, $maklon_id)
    {
        $project = DB::table('project')->where('id', $id)->get();
        $maklon_sementara = DB::table('table_sementara')
        ->join('maklon','table_sementara.maklon_id','=','maklon.id')->where('maklon_id',$maklon_id)
        ->get();

        $cas = DB::table('file')->where('jenis_file','cas') ->join('maklon_project','file.project_id','=','maklon_project.id')
        ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        ->get();
        $sertifikat = DB::table('file')->where('jenis_file','sertifikat')
        ->join('maklon_project','file.project_id','=','maklon_project.id')
        ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        ->get();
        $kontrak_kerjasama = DB::table('file')->where('jenis_file','kontrak_kerjasama')
        ->join('maklon_project','file.project_id','=','maklon_project.id')
        ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        ->get();
        return view('Project.wizard.info7', compact('project', 'sertifikat', 'kontrak_kerjasama', 'cas', 'maklon_sementara'));
    }

    public function info_lainnya($id)
    {
        
        $project = DB::table('project')->where('id', $id)->get();
        return view('Project.wizard.lainnya', compact('project'));
    }

    public function detail($id)
    {
        $mou = DB::table('file')
                ->where('jenis_file','mou')
                ->get();
                
        $project = DB::table('project')->where('id',$id)->get();
        $project1 = DB::table('project')->where('id',$id)->first();

        return view('Project.detail',compact('mou','project1','project'));
    }

    public function createReleted(Request $request)
    {
            $legalitas = \App\MaklonPkp::create([
            "user_id" => $request->user_id,
            "maklon_id"=> $request->maklon_id,
            "project_id"=> $request->project_id,
            "cpm"=>$request->cpm,
            "penawaran"=>$request->penawaran,
            "konsep_kerjasama" => $request->konsep_kerjasama,
            "alur_proses" => $request->alur_proses,
            "ppt_penjajakan"=>$request->ppt_penjajakan
            ]);
            if($request->hasFile('penawaran')){
                $request->file('penawaran')->move('images/',$request->file('penawaran')->getClientOriginalName());
                $legalitas->penawaran = $request->file('penawaran')->getClientOriginalName();
                $legalitas->save();
            } if($request->hasFile('cpm')){
                $request->file('cpm')->move('images/',$request->file('cpm')->getClientOriginalName());
                $legalitas->cpm = $request->file('cpm')->getClientOriginalName();
                $legalitas->save();
            } if($request->hasFile('ppt_penjajakan')){
                $request->file('ppt_penjajakan')->move('images/',$request->file('ppt_penjajakan')->getClientOriginalName());
                $legalitas->ppt_penjajakan = $request->file('ppt_penjajakan')->getClientOriginalName();
                $legalitas->save();
            }
            
            return redirect()->back()->with('sukses', 'Data Berhasil di Input');
    }

    public function createinfo(Request $request)    
    {
        $hitung = count($request->user_id);
        $maklon_project = db::table('maklon_project')->where('id',\DB::raw("(select max('id') from maklon_project)"))->get();
        for ($i=0; $i < $hitung; $i++) { 
            DB::table('maklon_project')->insert([
                "user_id" => $request->user_id[$i],
                "maklon_id"=> $request->maklon_id,
                "project_id"=> $request->project_id,
                "konsep_kerjasama" => $request->konsep_kerjasama[$i],
                "alur_proses" => $request->alur_proses[$i],
                ]);
    
                $project = DB::table('maklon_project')->latest()->first();
               
                DB::table('file')->insert([
                    "project_id" => $project->id,
                    "cpm"=>$request->cpm[$i],  
                    "penawaran"=>$request->penawaran[$i],
                    "ppt_penjajakan"=>$request->ppt_penjajakan[$i],
                ]);
                // $project = DB::table('maklon_project')->latest()->first();
                // DB::table('file')->insert([
                //     "project_id" => $project->id,
                //     "file"=>$request->penawaran[$i],
                //     "jenis_file"=>"penawaran"
                // ]);
                // $project = DB::table('maklon_project')->latest()->first();
                // DB::table('file')->insert([
                //     "project_id" => $project->id,
                //     "file"=>$request->ppt_penjajakan[$i],
                //     "jenis_file"=>"ppt_penjajakan"
                // ]);
        }
            return redirect()->back()->with('sukses', 'Data Berhasil di Input');
    }

    public function createMaklon(Request $request)
    {
        DB::table('maklon_project')->insert([
            "user_id" => $request->user_id,
            "maklon_id"=> $request->maklon_id,
            "project_id"=> $request->project_id,
            "konsep_kerjasama" => $request->konsep_kerjasama,
            "alur_proses" => $request->alur_proses,
            "status_maklon" => "on proses",
            "status_pro" => "on proses",
            "status_qa" => "on proses",
            "status_rd" => "on proses",
            "status_legal"=> "on proses",
            "status_gp"=> "on proses",
        ]);
        return redirect('/project/{id}/info')->with('sukses', 'Data Berhasil di Input');
    }

    public function legalitas(Request $request)
    {
        
        $project = DB::table('maklon_project')->latest()->first();
        $legalitas = \App\File::create([
            "project_id" => $project->id,
            "file"=>$request->file,
            "jenis_file"=>"legalitas"
        ]);
        if($request->hasFile('file')){
            $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
            $legalitas->file = $request->file('file')->getClientOriginalName();
            $legalitas->save();
        }
        return redirect()->back();
    }

    public function mou(Request $request)
    {
        $project = DB::table('maklon_project')->latest()->first();
        $mou = \App\File::create([
            "project_id" => $project->id,
            "file"=>$request->file,
            "jenis_file"=>"mou"
        ]);
        if($request->hasFile('file')){
            $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
            $mou->file = $request->file('file')->getClientOriginalName();
            $mou->save();
        }

        return redirect()->back();
    }
 
    public function pendukung(Request $request)
    {   
        $project = DB::table('maklon_project')->latest()->first();
        $cas =  \App\File::create([
            "project_id"=> $project->id,
            "file"=>$request->cas,
            "jenis_file"=> "cas",
        ]);
        if($request->hasFile('file')){
            $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
            $cas->file = $request->file('file')->getClientOriginalName();
            $cas->save();
        }

        $project = DB::table('maklon_project')->latest()->first();
        $sertifikat = \App\File::create([
            "project_id"=> $project->id,
            "file"=>$request->sertifikat,
            "jenis_file"=> "sertifikat",
        ]);
        if($request->hasFile('file')){
            $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
            $sertifikat->file = $request->file('file')->getClientOriginalName();
            $sertifikat->save();
        }

        $project = DB::table('maklon_project')->latest()->first();
        $kontrak = \App\File::create([
            "project_id"=> $project->id,
            "file"=>$request->kontrak_kerjasama,
            "jenis_file"=> "kontrak_kerjasama",
        ]);
        if($request->hasFile('file')){
            $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
            $kontrak->file = $request->file('file')->getClientOriginalName();
            $kontrak->save();
        }
        return redirect()->back()->with('sukses', 'Data Berhasil di Input');
    }

    public function edit($id)
    {
        $project = \App\Project::find($id);
        return view('Project.edit',['project' => $project]);
    }

    public function update(Request $request, $id)
    {
        $project = \App\Project::find($id);
        $project->update([
            'nama_project' => $request->nama_project,
            'kategori_project' => $request->kategori_project,
            'forecast' => $request->forecast,
            'pricelist' => $request->pricelist,
            'gramasi' => $request->gramasi,
            'konfigurasi_kemas' => $request->konfigurasi_kemas,
            'umur_simpan' => $request->umur_simpan,
            'gambaran_proses' =>$request->gambaran_proses,
            'urgensi_project' =>$request->urgensi_project,
            'timeline' => $request->timeline
        ]);
        if($request->hasFile('timeline')){
            $request->file('timeline')->move('file/',$request->file('timeline')->getClientOriginalName());
            $project->timeline = $request->file('timeline')->getClientOriginalName();
            $project->save();
        }
        return redirect ('/project')->with('sukses','Data Berhasil diupdate');
    }

    public function delete($id)
    {
        $project = \App\Project::find($id);
        $project->delete($project);
        return redirect('/project');
    }

    public function deleteMaklon($id,$id2)
    {
        $maklon = DB::table('table_sementara')->where('maklon_id',$id2)->where('project_id',$id)->delete();
        return redirect()->back()->with('alert','Berhasil dihapus');
    }

    public function deleteLegalitas($id,$id2)
    {
        $maklon = DB::table('table_sementara')->where('maklon_id',$id2)->where('project_id',$id)->delete();
        return redirect()->back()->with('alert','Berhasil dihapus');
    }
    
}
