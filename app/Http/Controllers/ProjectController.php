<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MaklonPkp;
use \App\Maklon;
use \App\maklonProject;
use \App\legalitas;
use \App\file;
use DB;
use Carbon;
use Session;
use Auth;
class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $maklon_project = \App\maklonProject::all();
        $data_project = DB::table('project')->get();
        $project_id = DB::table('project')->first();
        $maklon_id =    DB::table('project')->first();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();
        $mou = DB::table('file')
        ->where('jenis_file','mou')
        ->get();


        return view('Project.index',['maklons' => $maklons,'maklon_project' => $maklon_project,'data_project' => $data_project,'file' => $file,'data_maklon_pkp' => $data_maklon_pkp, 'data_file' => $data_file,'project_id'=> $project_id,'maklon_id'=> $maklon_id,'maklon_id'=> $maklon_id ]);
    }

    public function details($id)
    {
        $project = \App\Project::find($id);
        return view('Project.view',['project' => $project]);
    }

    public function create_maklon(Request $request)

    {
        $maklon = \App\Maklon::create([
            'project_id' => $request->project_id,
            'nama_maklon'=> $request->nama_maklon,
            'nama_pic'=> $request->nama_pic,
            'status'=> $request->status,
            'alamat'=> $request->alamat,
            'kontak'=>$request->kontak,
            'email'=>$request->email,
            'fasilitas_produksi'=>$request->fasilitas_produksi,
            'kategori'=>$request->kategori,
            'skala_kategori'=>$request->skala_kategori,
            'berbadan_hukum' =>$request->berbadan_hukum,
            'website'=> $request->website,
            'product_exist'=> $request ->product_exist,
            'keterangan' => $request->keterangan,

        ]);
        $insertedId = $maklon->id;

        if($request->hasFile('fasilitas_produksi')){
            $request->file('fasilitas_produksi')->move('images/',$request->file('fasilitas_produksi')->getClientOriginalName());
            $maklon->fasilitas_produksi = $request->file('fasilitas_produksi')->getClientOriginalName();
            $maklon->save();
        }

        // $perojek_aydi = $request->$

        return redirect("/project/$request->project_id/$maklon->id/releted")->with('sukses', 'Data Berhasil di Input');
    }


    public function idpkp (Request $request)
    {
        $data_project = DB::table('project')->get();
        $file = DB::table('file')
        ->join('project','file.project_id','=','project.id')->get();
        $data_maklon_pkp = maklon::all();
        $data_file =DB::table('file')->get();
        $maklons = DB::table('maklon_project')->get();
        $mou = DB::table('file')
        ->where('jenis_file','mou')
        ->get();


        return view('Project.index',['maklons' => $maklons,'data_project' => $data_project,'file' => $file, 'data_maklon_pkp' => $data_maklon_pkp, 'data_file' => $data_file ]);
    }
    public function show($id)
{
    $project = $id ;
    return view('Project.index',compact('project'));
}

    // Data Maklon
    public function showMaklon($id)
{
    //     $maklonProject = DB::table('maklon_project')->where('project_id', $id)->get();
        $maklons = DB::table('maklon')->where('id', $id)->get();
        $maklons = \App\Maklon::all();
        return [$maklonProject, $maklons];
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
        $maklon = DB::table('Maklon')->get();
        return view('Project.insert',compact('data_project','maklon'));

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
            "category" => $request->kategori_project,
            "sales_forecast" => $request->forecast,
            "selling_price" => $request->pricelist,
            "brand" => $request->nama_brand,
            "gramasi" => $request->gramasi,
            "UOM" => $request->satuan,
            "configuration" => $request->konfigurasi_kemas,
            "umur_simpan" => $request->umur_simpan,
            "gambaran_proses" => $request->gambaran_proses,
            "priority_project" => $request->urgensi_project,
            "timeline" => $request->timeline,
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

        $project = $id;
        $project1 = DB::table('project')->where('id',$id)->first();

        return view('Project.wizard.info',compact('mou','project1','project'));
    }

    public function info_maklon($id)
    {

                $data_maklon = DB::table('maklon')->get();
                $project = $id;
                $maklon_sementara = $maklon_id;
                return view('Project.wizard.info2',compact('data_maklon', 'project','maklon_sementara'));
      }

    public function info_releted($id,$maklon_id)
        {

            $project = $id;
            $maklon = $maklon_id;
            $maklon_sementara = $maklon_id;
            $maklons = \App\maklonProject::all()->take(1);
            $maklon_project = DB::table('maklon_project')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->get();
            $maklon_project_id = DB::table('maklon_project')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->first();


            // dd($maklon_project_id);
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
            // // ->get();


        return view('Project.wizard.info3',compact('project','maklon_sementara', 'maklon','maklons','maklon_project','maklon_project_id'));
    }

    public function updateReleted(Request $request, $id) {
        $maklon_project_id = \App\maklonProject::findOrFail($id)->latest();

        $maklon_project->update([
            "konsep_kerjasama"=>$request->konsep_kerjasama,
            "cpm"=>$request->cpm,
            "alur_proses"=>$request->alur_proses,
            "ppt_penjajakan"=>$request->ppt_penjajakan,
        ]);
            // if($request->hasFile('penawaran')){
            //     $request->file('penawaran')->move('images/',$request->file('penawaran')->getClientOriginalName());
            //     $legalitas->penawaran = $request->file('penawaran')->getClientOriginalName();
            //     $legalitas->save();
            // } if($request->hasFile('cpm')){
            //     $request->file('cpm')->move('images/',$request->file('cpm')->getClientOriginalName());
            //     $legalitas->cpm = $request->file('cpm')->getClientOriginalName();
            //     $legalitas->save();
            // } if($request->hasFile('ppt_penjajakan')){
            //     $request->file('ppt_penjajakan')->move('images/',$request->file('ppt_penjajakan')->getClientOriginalName());
            //     $legalitas->ppt_penjajakan = $request->file('ppt_penjajakan')->getClientOriginalName();
            //     $legalitas->save();
            // }

        return redirect()->back()->with('sukses', 'Data Berhasil di Update');
    }

    public function penawaran(Request $request ,$id) {

        // $project= $id;
        // $maklon = $maklon_id;
        $maklon_project = \App\maklonProject::find($id);
        $timeStamp = date("Y-m-d H:i:s");
        // $timeStamp = date( "m/d/Y", strtotime($timeStamp));
        $maklon_project->update([
            "penawaran"=>$request->file,
            "penawaran_upload"=> $timeStamp

            ]);
            if($request->hasFile('penawaran')){
                $request->file('penawaran')->move('file/',$request->file('penawaran')->getClientOriginalName());
                $maklon_project->penawaran = $request->file('penawaran')->getClientOriginalName();
                $maklon_project->save();
            }

            // } if($request->hasFile('cpm')){
            //     $request->file('cpm')->move('images/',$request->file('cpm')->getClientOriginalName());
            //     $legalitas->cpm = $request->file('cpm')->getClientOriginalName();
            //     $legalitas->save();
            // } if($request->hasFile('ppt_penjajakan')){
            //     $request->file('ppt_penjajakan')->move('images/',$request->file('ppt_penjajakan')->getClientOriginalName());
            //     $legalitas->ppt_penjajakan = $request->file('ppt_penjajakan')->getClientOriginalName();
            //     $legalitas->save();



        return redirect()->back()->with('sukses', 'Data Berhasil di Update');
    }






        public function info_penawaran($id, $maklon_id)
    {
        $project = $id;
        $maklon = $maklon_id;
        $maklon_sementara = $maklon_id;
        // $maklon_project=[];
        $maklon_project = DB::table('maklon_project')->select('id')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
            ])->first();

            $maklons = \App\maklonProject::all()->take(1);

      $maklon_project_id = DB::table('maklon_project')->where([
        ['project_id', $id],
        ['maklon_id', $maklon_id]
        ])->get();


        // dd($maklon_project_id);
            // $maklons = maklonProject::all();
        // dd($maklon_project);
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
        // // ->get();
        // dd ([$maklon_project]);
        // return $maklon_project;
    return view('Project.wizard.infopenawaran',compact('project','maklon_sementara', 'maklon','maklons','maklon_project','maklon_project_id'));
}
    public function info_mou($id, $maklon_id)
    {
        $project = $id;
        $maklon_sementara = $maklon_id;
        $maklons = \App\maklonProject::all()->take(1);
        $mou =DB::table('file')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
            ])->get();
        // $maklons = \App\maklonProject::findOrFail($id)->get();
        // ->join('maklon_P','maklon_project.project_id','=','project.id')->where('project.id',$id)

        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
            ])->first();

            $maklon_project_id = DB::table('maklon_project')->where([
                ['project_id', $id],
                ['maklon_id', $maklon_id]
                ])->get();


            // $maklons = maklonProject::all();



        return view('Project.wizard.info5', compact('project', 'mou', 'maklon_sementara','maklons','maklon_project','maklon_project_id'));
    }

    public function info_trial($id, $maklon_id)
    {
        $project = $id;
        $maklon_sementara = $maklon_id;
        $trial = DB::table('trials')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();

        $trials = DB::table('trials')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->first();

        // $maklons = \App\maklonProject::findOrFail($id)->get();
        $maklons = \App\maklonProject::all()->take(1);
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();
        return view('Project.wizard.info6', compact('project', 'maklon_sementara','maklons', 'maklon_project', 'trial', 'trials'));
    }

    public function info_pendukung($id, $maklon_id)
    {
        $project = $id;
        $maklon_sementara = $maklon_id;
        // $cas = DB::table('file')->where('jenis_file','cas') ->join('maklon_project','file.project_id','=','maklon_project.id')
        // ->join('Maklon','maklon_project.maklon_id','=','Maklon.id')->where('Maklon.id',$maklon_id)
        // ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        // ->first();

        $foodsafety = DB::table('food_safety')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->first();

        $maklons = \App\maklonProject::all()->take(1);
        // dd($cas);
        // $kontrak_kerjasama = DB::table('file')->where('jenis_file','kontrak_kerjasama')
        // ->join('maklon_project','file.project_id','=','maklon_project.id')
        // ->join('maklon','maklon_project.maklon_id','=','maklon.id')->where('maklon.id',$maklon_id)
        // ->join('project','maklon_project.project_id','=','project.id')->where('project.id',$id)
        // ->get();
        return view('Project.wizard.info7', compact('project', 'foodsafety', 'kontrak_kerjasama', 'cas','maklons', 'maklon_sementara','maklon_project'));
    }

    public function info_approval ($id, $maklon_id)
    {
        $maklon_sementara = $maklon_id;
        $project = $id;
        // $maklon_project = \App\maklonProject::findOrFail($id)->get();
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->first();
        $maklon_project_id = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();
        $maklons = \App\maklonProject::all()->take(1);
        // $maklons = maklonProject::all();
        return view('Project.wizard.infoapproval', compact('project','maklons', 'maklon_sementara','maklon_project','maklon_project_id'));
    }

    public function info_kontrak ($id, $maklon_id)
    {
        $maklon_sementara = $maklon_id;
        $kontrak = DB::table('file')
            // ->where('jenis_file','kontrak_kerjasama')
            ->where([
                ['jenis_file','kontrak_kerjasama'],
                ['project_id', $id],
                ['maklon_id', $maklon_id]
            ])->get();

        $project = $id;
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->first();
        $maklon_project_id = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();
        $maklons = \App\maklonProject::all()->take(1);
        $maklon_id = $maklon_id;
        $project_id = $id;

        // dd($kontrak);

        return view('Project.wizard.infokontrak', compact('project','kontrak','maklons', 'maklon_sementara','maklon_project','maklon_project_id', 'maklon_id', 'project_id'));
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

        $project = $id;
        $project1 = DB::table('project')->where('id',$id)->first();

        return view('Project.index',compact('mou','project1','project'));
    }

    public function createReleted(Request $request)
    {
            $legalitas = \App\maklonProject::create([
            "user_id" => $request->user_id,
            "maklon_id"=> $request->maklon_id,
            "project_id"=> $request->project_id,
            // "cpm"=>$request->cpm,
            // "penawaran"=>$request->penawaran,
            "konsep_kerjasama" => $request->konsep_kerjasama,
            "alur_proses" => $request->alur_proses,
            "ppt_penjajakan"=>$request->ppt_penjajakan,
            "cpm" => $request->cpm,
            "status_maklon"=> "2",
            ]);
            // if($request->hasFile('penawaran')){
            //     $request->file('penawaran')->move('images/',$request->file('penawaran')->getClientOriginalName());
            //     $legalitas->penawaran = $request->file('penawaran')->getClientOriginalName();
            //     $legalitas->save();
            // } if($request->hasFile('cpm')){
            //     $request->file('cpm')->move('images/',$request->file('cpm')->getClientOriginalName());
            //     $legalitas->cpm = $request->file('cpm')->getClientOriginalName();
            //     $legalitas->save();
            // } if($request->hasFile('ppt_penjajakan')){
            //     $request->file('ppt_penjajakan')->move('images/',$request->file('ppt_penjajakan')->getClientOriginalName());
            //     $legalitas->ppt_penjajakan = $request->file('ppt_penjajakan')->getClientOriginalName();
            //     $legalitas->save();
            // }


            return redirect()->back()->with('sukses', 'Data Berhasil di Input');
    }



    public function createinfo(Request $request)
    {
        $hitung = count($request->user_id);
        $maklon_project = DB::table('maklon_project')->where('id',\DB::raw("(select max('id') from maklon_project)"))->get();
        for ($i=0; $i < $hitung; $i++) {
            DB::table('maklon_project')->insert([
                "user_id" => $request->user_id[$i],
                "maklon_id"=> $request->maklon_id,
                "project_id"=> $request->project_id,
                "konsep_kerjasama" => $request->konsep_kerjasama[$i],
                "alur_proses" => $request->alur_proses[$i],

            // "cpm"=>$request->cpm,

                ]);

                $project = DB::table('maklon_project')->latest()->first();

                DB::table('file')->insert([
                    "project_id" => $project->id,
                //     "cpm"=>$request->cpm[$i],
                //     "penawaran"=>$request->penawaran[$i],
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




    // public function pendukung(Request $request)
    // {
    //     $project = DB::table('maklon_project')->latest()->first();
    //     // $cas =  \App\File::create([
    //     //     "project_id"=> $project->id,
    //     //     "file"=>$request->cas,
    //     //     "jenis_file"=> "cas",
    //     // ]);
    //     // if($request->hasFile('file')){
    //     //     $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
    //     //     $cas->file = $request->file('file')->getClientOriginalName();
    //     //     $cas->save();
    //     // }

    //     $project = DB::table('maklon_project')->latest()->first();
    //     $sertifikat = \App\File::create([
    //         "project_id"=> $project->id,
    //         "file"=>$request->sertifikat,
    //         "jenis_file"=> "sertifikat",
    //         ]);
    //         if($request->hasFile('file')){
    //             $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
    //             $sertifikat->file = $request->file('file')->getClientOriginalName();
    //             $sertifikat->save();
    //         }

    //         $project = DB::table('maklon_project')->latest()->first();
    //         // $kontrak = \App\file::create([
    //         //     "project_id"=> $project->id,
    //         //     "file"=>$request->kontrak_kerjasama,
    //         //     "jenis_file"=> "kontrak_kerjasama",
    //         //     ]);
    //         //     if($request->hasFile('file')){
    //         //         $request->file('file')->move('images/',$request->file('file')->getClientOriginalName());
    //         //         $kontrak->file = $request->file('file')->getClientOriginalName();
    //         //         $kontrak->save();
    //         //     }
    //             return redirect()->back()->with('sukses', 'Data Berhasil di Input');
    // }

    public function trial (Request $request )
    {
            if($request->hasFile('file')){
                $summ = $request->file('file')->getClientOriginalName();
            }
            $trial = \App\trial::create([
                    "trial_id" => $request->trial_id,
                "user_id" => auth::user()->id,
                "project_id"=>$request->project_id,
                "maklon_id"=> $request->maklon_id,
                "tanggal"=> $request->tanggal,
                "kategori" => $request->kategori,
                "summary" => $request->summary,
                "status"=> $request->status,

            ]);

            if($request->hasFile('summary')){
                $request->file('summary')->move('images/',$request->file('summary')->getClientOriginalName());
                $trial->summary = $request->file('summary')->getClientOriginalName();
                $trial->save();


            return redirect()->back()->with('sukses', 'Data Berhasil di Input');
        }
    }

        public function foodsafety (Request $request)

        {

                // $project = DB::table('food_safety')->latest()->first();
                $foodsafety = \App\food_safety::create([
                "maklon_id" => $request->maklon_id,
                "project_id" => $request->project_id,
                "kategori"=>$request->kategori,
                "file"=>$request->file,
                "status"=>$request->status,
                ]);
                if($request->hasFile('file')){
                        $request->file('file')->move('file/',$request->file('file')->getClientOriginalName());
                        $foodsafety->file = $request->file('file')->getClientOriginalName();
                        $foodsafety->save();
            }

            return redirect()->back();

        }

        // public function info_foodsafety ($id ,$maklon_id)
        // {
        //     $project = $id;
        //     $maklon_sementara = $maklon_id;
        //     $maklons = \App\maklonProject::where([
        //         ['project_id', $id],
        //         ['maklon_id', $maklon_id]
        //     ])->first();

        //     $foodsafety = DB::table('food_safety')->get();
        //     $maklon_project = DB::table('maklon_project')->where([
        //         ['project_id', $id],
        //         ['maklon_id', $maklon_id]
        //     ])->get();


        //     return view('Project.wizard.info7', compact('project', 'maklon_sementara', 'maklon_project', 'maklons','foodsafety'));
        // }

        // public function fhs (Request $request)

        // // {

        // //     $project = DB::table('audit_fhs')->latest()->first();
        // //     $fhs = \App\audit_fhs::create([

        // //     "ketidaksesuain"=>$request->ketidaksesuaian,
        // //     "kategori"=>$request->kategori,
        // //     ]);
        // //     return redirect()->back();

        // // }

        public function info_audit (Request $request)

        {

        $project = DB::table('info_audit')->latest()->first();
        $aud = \App\info_audit::create([
            "no_audit"=>$request->no_audit,
            "nama_supplier"=>$request->nama_supplier,
            "nama_bb"=>$request->nama_bb,
            "tanggal_audit"=>$request->tanggal_audit,
            "auditor"=>$request->auditor,
            "auditee"=>$request->auditee,
            "status"=>$request->status,
            ]);
            return redirect()->back();

        }
       public function kontrak_kerjasama (Request $request,$maklon_id, $project_id)
        {
            $project = DB::table('maklon_project')->latest()->first();

            $kontrak = \App\file::create([
                "maklon_id"=>$maklon_id,
                "project_id"=> $project_id,
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
            public function mou(Request $request)
            {
                if($request->hasFile('file')){
                    $legal = $request->file('file')->getClientOriginalName();
                }
                $timeStamp = date("Y-m-d H:i:s");

                $project = DB::table('maklon_project')->latest()->first();
                $mou = \App\file::create([
                    "project_id" => $project->project_id,
                    "maklon_id" => $project->maklon_id,
                    "file"=>$request->file,
                    "jenis_file"=>"mou",
                   "file_upload"=> $timeStamp,

                ]);
                if($request->hasFile('file')){
                    $request->file('file')->move('file/',$request->file('file')->getClientOriginalName());
                    $mou->file = $request->file('file')->getClientOriginalName();
                    $mou->save();
                }

                return redirect()->back();
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

    // public function destroy_pendukung ($id) {
    //     $concert = concert::findOrFail($id);

    //     $concert-> update(
    //         $request->all()
    //     );

    //     return redirect()->route('concert.index');
    // }



    public function deleteMaklon($id,$id2)
    {
        $maklon = DB::table('table_sementara')->where('maklon_id',$id2)->where('project_id',$id)->delete();
        return redirect()->back()->with('alert','Berhasil dihapus');
    }

    public function deletelegal($id)
    {
        $legal= DB::table('file')->where('id',$id)->where('jenis_file','legalitas')->delete();
        return redirect()->back()->with('alert','Berhasil dihapus');

    }
    public function delete_mou($id)
    {

        $mou = \App\file::findOrFail($id)->first();
        $mou->delete($mou);
        return redirect()->back()->with('alert','Berhasil dihapus');
    }

}
