<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MaklonController extends Controller
{
    public function index(Request $request)
    {
        $data_project = \App\Project::all();
        $data_maklon = \App\Maklon::orderBy('created_at', 'DESC')
        ->paginate(30);
        return view('Maklon.index',['data_maklon' => $data_maklon,'data_project' => $data_project]);
        
    }

    public function create(Request $request)
    {
        return view('Maklon.insert');
    }
    
    public function store(Request $request)
    {
        $maklon = \App\Maklon::create([
            // 'project_id' => $request->project_id,
            'nama_maklon'=> $request->nama_maklon,
            'nama_pic'=> $request->nama_pic,
            'alamat'=> $request->alamat,
            'kontak'=>$request->kontak,
            'email'=>$request->email,
            'fasilitas_produksi'=>$request->fasilitas_produksi,
            'skala_kategori'=>$request->skala_kategori,
            'berbadan_hukum' =>$request->berbadan_hukum,
            'keterangan' => $request->keterangan,
            
        ]);        
        if($request->hasFile('fasilitas_produksi')){
            $request->file('fasilitas_produksi')->move('images/',$request->file('fasilitas_produksi')->getClientOriginalName());
            $maklon->fasilitas_produksi = $request->file('fasilitas_produksi')->getClientOriginalName();
            $maklon->save();
        }
        return redirect('/maklon')->with('sukses', 'Data Berhasil di Input');
    }
    public function createInPkp(Request $request)
    {
        $maklon = \App\Maklon::create([
            // 'project_id' => $request->project_id,
            'nama_maklon'=> $request->nama_maklon,
            'nama_pic'=> $request->nama_pic,
            'alamat'=> $request->alamat,
            'kontak'=>$request->kontak,
            'email'=>$request->email,
            'fasilitas_produksi'=>$request->fasilitas_produksi,
            'skala_kategori'=>$request->skala_kategori,
            'berbadan_hukum' =>$request->berbadan_hukum,
            'keterangan' => $request->keterangan,
            
        ]);        
        if($request->hasFile('fasilitas_produksi')){
            $request->file('fasilitas_produksi')->move('images/',$request->file('fasilitas_produksi')->getClientOriginalName());
            $maklon->fasilitas_produksi = $request->file('fasilitas_produksi')->getClientOriginalName();
            $maklon->save();
        }
        return back()->with('sukses', 'Data Berhasil di Input');
    }

    public function delete($id)
    {
        $maklon = \App\Maklon::find($id);
        $maklon->delete($maklon);
        return redirect('/maklon');
    }

    public function lihat($id)  
    {
        $maklon = \App\Maklon::find($id);
        return view('Maklon.lihat',['maklon' => $maklon]);
    }

    public function edit($id)
    {
        $maklon = \App\Maklon::find($id);
        return view('Maklon.edit',['maklon' => $maklon]);
    }

    public function update(Request $request,$id)
    {
        $maklon = \App\Maklon::find($id);
        $maklon->update($request->all());
        if($request->hasFile('fasilitas_produksi')){
            $request->file('fasilitas_produksi')->move('images/',$request->file('fasilitas_produksi')->getClientOriginalName());
            $maklon->fasilitas_produksi = $request->file('fasilitas_produksi')->getClientOriginalName();
            $maklon->save();
        }
        return redirect ('/maklon')->with('sukses','Data Berhasil diupdate');
    }

    public function profile($id)
    {
        $maklon = \App\Maklon::find($id);
        return view('Maklon.profile',['maklon' => $maklon]);
    }

    public function dokumen()
    {
        $maklon = \App\Maklon::all(); 
        $project = \App\Project::all();
        return view('Pages.dokumen',['maklon' => $maklon,'project'=>$project]);
    }

    // public function dokumen()
    // {
    //     $project = DB::table('project')
    //                 ->join('maklon','project.maklon_id','=','maklon.id')
    //                 ->select('project.nama_project', 'maklon.dokumen_legalitas', 'maklon.contact')
    //                 ->get();
    //     $maklon = DB::table('maklon')->get();
    //     return view('Pages.dokumen',['project' => $project, 'maklon' => $maklon]);
    // }

    public function harga()
    {
        return view ('Pages.harga');
    }

    public function trial()
    {
        return view('Pages.trial');
    }

    public function review()
    {
        return view('Pages.review');
    }

    public function halal()
    {
        return view('Pages.halal');
    }

    public function kontak()
    {
        return view('Pages.kontak');
    }

    
}
