<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Maklon ;

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
        if($request->hasFile('fasilitas_produksi')){
            $request->file('fasilitas_produksi')->move('images/',$request->file('fasilitas_produksi')->getClientOriginalName());
            $maklon->fasilitas_produksi = $request->file('fasilitas_produksi')->getClientOriginalName();
            $maklon->save();
        }
        return redirect('/maklon')->with('sukses', 'Data Berhasil di Input');
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

    public function trash()
{
    	// mengampil data guru yang sudah dihapus
    	$maklon = Maklon::onlyTrashed()->get();
    	return view('Maklon.trash', ['maklon' => $maklon]);
}

public function restore($id)
{
    	$maklon = Maklon::onlyTrashed()->where('id',$id);
    	$maklon->restore();
    	return redirect('maklon/trash');
}

}
