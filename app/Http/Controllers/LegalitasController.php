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


<<<<<<< HEAD
        $timeStamp = date("Y-m-d H:i:s");

=======
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3
        if($request->hasFile('akta_pendirian')){
            $legal = $request->file('akta_pendirian')->getClientOriginalName();
        }
        if($request->hasFile('akta_wewenang_direksi')){
            $legal = $request->file('akta_wewenang_direksi')->getClientOriginalName();
        }

        $legalitas = \App\legalitas::create([
            "maklon_id" => $maklon_id,
            "project_id" => $project->project_id,
            "akta_pendirian"=> $request->akta_pendirian,
            "akta_susunan_direksi"=> $request->akta_susunan_direksi,
            "akta_wewenang_direksi"=> $request->akta_wewenang,
            "siup"=> $request->siup,
            "nib"=> $request->nib,
            "tdp"=> $request->tdp,
            "iui"=> $request->iui,
            "npwp"=> $request->npwp,
            "izin_domisili"=> $request->izin_domisili,
            "izin_lingkungan"=> $request->izin_lingkungan,
            "akta_pengurus"=> $request->akta_pengurus,
            "psb"=>$request->psb,
            "ktp"=> $request->ktp,
            "iumk"=> $request->iumk,
            "sppl_amdal_ukl_upl"=> $request->sppl_amdal_ukl_upl,
            "sppk"=> $request->sppk,
<<<<<<< HEAD
            "legalitas_upload"=>$timeStamp,
=======
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3


        ]);

        if($request->hasFile('akta_pendirian')){
            $request->file('akta_pendirian')->move('file/',$request->file('akta_pendirian')->getClientOriginalName());
            $legalitas->akta_pendirian = $request->file('akta_pendirian')->getClientOriginalName();
            $legalitas->save();
        }
        if($request->hasFile('akta_wewenang_direksi')){
            $request->file('akta_wewenang_direksi')->move('file/',$request->file('akta_wewenang_direksi')->getClientOriginalName());
            $legalitas->akta_wewenang_direksi = $request->file('akta_wewenang_direksi')->getClientOriginalName();
            $legalitas->save();}
<<<<<<< HEAD

=======
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3
        if($request->hasFile('akta_penyesuaian')){
        $request->file('akta_penyesuaian')->move('file/',$request->file('akta_penyesuaian')->getClientOriginalName());
        $legalitas->akta_penyesuaian = $request->file('akta_penyesuaian')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('akta_susunan_direksi')){
        $request->file('akta_susunan_direksi')->move('file/',$request->file('akta_susunan_direksi')->getClientOriginalName());
        $legalitas->akta_susunan_direksi = $request->file('akta_susunan_direksi')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('siup')){
        $request->file('siup')->move('file/',$request->file('siup')->getClientOriginalName());
        $legalitas->siup = $request->file('siup')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('nib')){
        $request->file('nib')->move('file/',$request->file('nib')->getClientOriginalName());
        $legalitas->nib = $request->file('nib')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('tdp')){
        $request->file('tdp')->move('file/',$request->file('tdp')->getClientOriginalName());
        $legalitas->tdp = $request->file('tdp')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('psb')){
        $request->file('psb')->move('file/',$request->file('psb')->getClientOriginalName());
        $legalitas->psb = $request->file('psb')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('iui')){
        $request->file('iui')->move('file/',$request->file('iui')->getClientOriginalName());
        $legalitas->iui = $request->file('iui')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('npwp')){
        $request->file('npwp')->move('file/',$request->file('npwp')->getClientOriginalName());
        $legalitas->npwp = $request->file('npwp')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('ktp')){
        $request->file('ktp')->move('file/',$request->file('ktp')->getClientOriginalName());
        $legalitas->ktp = $request->file('ktp')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('izin_domisili')){
        $request->file('izin_domisili')->move('file/',$request->file('izin_domisili')->getClientOriginalName());
        $legalitas->izin_domisili = $request->file('izin_domisili')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('izin_lingkungan')){
        $request->file('izin_lingkungan')->move('file/',$request->file('izin_lingkungan')->getClientOriginalName());
        $legalitas->izin_lingkungan = $request->file('izin_lingkungan')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('akta_pengurus')){
        $request->file('akta_pengurus')->move('file/',$request->file('akta_pengurus')->getClientOriginalName());
        $legalitas->akta_pengurus = $request->file('akta_pengurus')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('iumk')){
        $request->file('iumk')->move('file/',$request->file('iumk')->getClientOriginalName());
        $legalitas->iumk = $request->file('iumk')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('sppl_amdal_ukl_upl')){
        $request->file('sppl_amdal_ukl_upl')->move('file/',$request->file('sppl_amdal_ukl_upl')->getClientOriginalName());
        $legalitas->sppl_amdal_ukl_upl = $request->file('sppl_amdal_ukl_upl')->getClientOriginalName();
        $legalitas->save();}
        if($request->hasFile('sppk')){
        $request->file('sppk')->move('file/',$request->file('sppk')->getClientOriginalName());
        $legalitas->sppk = $request->file('sppk')->getClientOriginalName();
        $legalitas->save();


    }
    return redirect()->back()->with('sukses', 'Data Berhasil di Update');
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
        $maklons = \App\maklonProject::all()->take(1);
        $maklon_project = DB::table('maklon_project')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
        ])->get();
        $legal = \App\legalitas::all();
        $statusCek = \App\legalitas::all();
        $legalitas =DB::table('legalitas')->where([
            ['project_id', $id],
            ['maklon_id', $maklon_id]
            ])->get();

            // dd($legalitasz);
        return view('Project.wizard.info4',compact('project', 'legalitas','legalitasz','maklons', 'maklon2','maklon_sementara','maklon', 'maklon_project'));
    }

            public function update_legal(Request $request,$id)
            {
                $legalitasz = legalitas::findOrFail($id);


                if($legalitasz->akta_pendirian){
                    $aktePendirian = $legalitasz->akta_pendirian;
                }else{
                    $aktePendirian = $request->akta_pendirian;
                }

                if($legalitasz->akta_penyesuaian){
                    $aktaPenyesuaian = $legalitasz->akta_penyesuaian;
                }else{
                    $aktaPenyesuaian = $request->akta_penyesuaian;
                }

                if($legalitasz->akta_susunan_direksi){
                    $aktaSusunanDireksi = $legalitasz->akta_susunan_direksi;
                }else{
                    $aktaSusunanDireksi = $request->akta_susunan_direksi;
                }

                if($legalitasz->akta_wewenang_direksi){
                    $aktaWewenangDireksi = $legalitasz->akta_wewenang_direksi;
                }else{
                    $aktaWewenangDireksi = $request->akta_wewenang_direksi;
                }

<<<<<<< HEAD

                if($legalitasz->akta_pengurus){
                    $aktaPengurus = $legalitasz->akta_pengurus;
                }else{
                    $aktaPengurus = $request->akta_pengurus;
                }

=======
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3
                if($legalitasz->siup){
                    $siup = $legalitasz->siup;
                }else{
                    $siup = $request->siup;
                }

                if($legalitasz->nib){
                    $nib = $legalitasz->nib;
                }else{
                    $nib = $request->nib;
                }

                if($legalitasz->tdp){
                    $tdp = $legalitasz->tdp;
                }else{
                    $tdp = $request->tdp;
                }

                if($legalitasz->iui){
                    $iui = $legalitasz->iui;
                }else{
                    $iui = $request->iui;
                }

                if($legalitasz->npwp){
                    $npwp = $legalitasz->npwp;
                }else{
                    $npwp = $request->npwp;
                }


                if($legalitasz->izin_domisili){
                    $izinDomisili = $legalitasz->izin_domisili;
                }else{
                    $izinDomisili = $request->izin_domisili;
                }


                if($legalitasz->izin_lingkungan){
                    $izinLingkungan = $legalitasz->izin_lingkungan;
                }else{
                    $izinLingkungan = $request->izin_lingkungan;
                }


                if($legalitasz->npwp){
                    $npwp = $legalitasz->npwp;
                }else{
                    $npwp = $request->npwp;
                }

                if($legalitasz->ktp){
                    $ktp = $legalitasz->ktp;
                }else{
                    $ktp = $request->ktp;
                }


                if($legalitasz->iumk){
                    $iumk = $legalitasz->iumk;
                }else{
                    $iumk = $request->iumk;
                }

<<<<<<< HEAD
                if($legalitasz->psb){
                    $psb = $legalitasz->psb;
                }else{
                    $psb = $request->psb;
                }

=======
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3

                if($legalitasz->sppl_amdal_ukl_upl){
                    $sppl = $legalitasz->sppl_amdal_ukl_upl;
                }else{
                    $sppl = $request->sppl_amdal_ukl_upl;
                }

                if($legalitasz->sppk){
                    $sppk = $legalitasz->sppk;
                }else{
                    $sppk = $request->sppk;
                }

                $legalitasz->update([
                    "akta_pendirian"=> $aktePendirian,
                    "akta_penyesuaian"=> $aktaPenyesuaian,
<<<<<<< HEAD
                    "akta_susunan_direksi"=> $aktaSusunanDireksi,
                    "akta_wewenang_direksi"=> $aktaWewenangDireksi,
                    "siup"=> $siup,
                    "nib"=> $nib,
                    "tdp"=> $tdp,
                    "iui"=> $iui,
                    "npwp"=> $npwp,
                    "izin_domisili"=> $izinDomisili,
                    "izin_lingkungan"=> $izinLingkungan,
                    "akta_pengurus"=> $aktaPengurus,
                    "psb"=>$psb,
                    "ktp"=> $ktp,
                    "iumk"=> $iumk,
                    "sppl_amdal_ukl_upl"=> $sppl,
                    "sppk"=> $sppk,
                    "legalitas_upload"=>$timeStamp,
=======
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
                    "psb"=>$request->psb,
                    "ktp"=> $request->ktp,
                    "iumk"=> $request->iumk,
                    "sppl_amdal_ukl_upl"=> $request->sppl_amdal_ukl_upl,
                    "sppk"=> $request->sppk,
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3

                ]);
                return redirect()->back()->with('sukses', 'Data Berhasil di Update');

            }

            public function review(Request $request,$id)
            {
                $legalitasz = legalitas::findOrFail($id);
                $legalitasz->update([
                    "review"=>$request->review,
                ]);
                return redirect()->back()->with('sukses', 'Data Berhasil di Update');

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
            'status_sppl_amdal_ukl_upl' => 2,
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
