<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MaklonPkp;
use \App\Maklon;
use \App\maklonProject;
use \App\legalitas;
use DB;
use Carbon;
use Session;
use Auth;
class LegalitasController extends Controller
{
    public function legalitas(Request $request, $id, $maklon_id)
    {
        $project = DB::table('maklon_project')->latest()->first();
        $legalitas = \App\legalitas::create([
            "maklon_id" => $maklon_id,
            "project_id" => $project->project_id,
            "akta_pendirian"=> $request->akta_pendirian,
            "akta_susunan_direksi"=> $request->akta_susunan,
            "akta_wewenang_direksi"=> $request->akta_wewenang,
            "siup"=> $request->siup,
            "nib"=> $request->nib,
            "tdp"=> $request->tdp,
            "iui"=> $request->iui,
            "npwp"=> $request->npwp,
            "izin_domisili"=> $request->izin_domisili,
            "izin_lingkungan"=> $request->izin_lingkungan,
            "akta_pengurus"=> $request->akta_pengurus,
            "ktp"=> $request->ktp,
            "iumk"=> $request->iumk,
            "sppl_mdal_ukl_upl"=> $request->sppl_mdal_ukl_upl,
            "sppkp"=> $request->sppk,

        ]);

        if($request->hasFile('file')){
            $request->akta_pendirian('akta_pendirian')->move('images/',$request->akta_pendirian('akta_pendirian')->getClientOriginalName());
            $legalitas->akta_pendirian = $request->akta_pendirian('akta_pendirian')->getClientOriginalName();
            $legalitas->save();
        }
        return redirect()->back();

    }
    public function info_legalitas($id , $maklon_id)
    {
        $project = $id;
        $maklon_sementara = $maklon_id;
        $maklon = $maklon_id;
        $legalitasz = DB::table('legalitas')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
            ])->first();
        $maklons = \App\maklonProject::all();
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();
        $legal = \App\legalitas::all();

        $legalitas =DB::table('legalitas')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
            ])->get();

            // dd($legalitasz);
        return view('Project.wizard.info4',compact('project', 'legalitas','legalitasz','maklons', 'maklon2','maklon_sementara','maklon', 'maklon_project'));
    }

    public function statusAktaPendirian($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_akta_pendirian' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusPenyesuaian($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_akta_penyesuaian' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusSusunanDireksi ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_susunan_direksi' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusWewenangDireksi($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_wewenang_direksi' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusSiup($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_siup' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusNib ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_nib' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusTdp ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_tdp' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusIui($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_iui' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusNpwp ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_npwp' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusDomisili ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_izin_domisili' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusLingkungan ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_izin_lingkungan' => 2,
        ]);

        return redirect()->back();
    }
    public function StatusPsb ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_psb' => 2,
        ]);

        return redirect()->back();
    }


    public function StatusAktaPengurus($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_akta_pengurus' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusKtp ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_ktp' => 2,
        ]);

        return redirect()->back();
    }

    public function StatusIumk ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_iumk' => 2,
        ]);

        return redirect()->back();
    }


    public function StatusAmdal ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_spppl_amdal_ukl_upl' => 2,
        ]);

        return redirect()->back();
    }


    public function StatusSppk ($id)
    {
        $legalitasz = legalitas::findOrFail($id);
        $legalitasz->update([
            'status_sppk' => 2,
        ]);

        return redirect()->back();
    }



}
