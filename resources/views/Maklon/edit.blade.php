@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data User</h3>
                        </div>
                        <div class="panel-body">
                        <form action="/maklon/{{$maklon->id}}/update" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Perusahaan</label>
                            <input name="nama_maklon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->nama_maklon}}">            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama PIC</label>
                            <input name="nama_pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dokumen Legalitas" value="{{$maklon->nama_pic}}">            
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$maklon->alamat}}</textarea>
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kontak</label>
                            <input name="kontak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dokumen Legalitas" value="{{$maklon->kontak}}">            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fasilitas Produksi</label>
                            <input name="fasilitas_produksi" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fasilitas Produksi" value="{{$maklon->fasilitas_produksi}}">            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Skala Perusahaan</label>
                            <select name="skala_perusahaan" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Perusahaan" @if($maklon->skala_kategori == 'Perusahaan') selected @endif >Perusahaan</option>
                                    <option value="UKM" @if($maklon->skala_kategori == 'UKM') selected @endif >UKM</option>
                                    </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Berbadan Hukum</label>
                                <select name="berbadan_hukum" class="form-control" id="exampleFormControlSelect1">
                                <option value="CV" @if($maklon->berbadan_hukum == 'CV') selected @endif >CV</option>
                                <option value="PT" @if($maklon->berbadan_hukum == 'PT') selected @endif >PT</option>
                                <option value="Perorangan" @if($maklon->berbadan_hukum == 'Perorangan') selected @endif >Perorangan</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$maklon->keterangan}}</textarea>
                        </div>        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                        
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @stop