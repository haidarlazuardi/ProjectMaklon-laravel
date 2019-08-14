@extends('layout.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Data Maklon</h3>
                        </div>
                        <div class="panel-body">
                                <form action="/maklon/store" method="post">
                                    {{csrf_field()}}
                                    {{-- <div class="form-group">
                                        <label for="exampleOptionProject">Nama Project</label>
                                        <select name="project_id" class="form-control" id="exampleOptionProject">   
                                          @foreach($data_project as $project)
                                              <option value="{{$project->id}}">{{$project->nama_project}}</option>
                                            @endforeach
                                        </select>
                                    </div>   --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Maklon</label>
                                        <input name="nama_maklon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon">            
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama PIC</label>
                                        <input name="nama_pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama PIC">            
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Alamat</label>
                                      <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">            
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Contact</label>
                                      <input name="kontak"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact">            
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">            
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Fasilitas Produksi</label>
                                  <input name="fasilitas_produksi"  type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fasilitas Produksi">            
                                </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih Skala Perusahaan</label>
                                        <select name="skala_kategori" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Perusahaan">Perusahaan</option>
                                        <option value="UKM">UKM</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Berbadan Hukum</label>
                                        <select name="berbadan_hukum" class="form-control" id="exampleFormControlSelect1">
                                        <option value="CV">CV</option>
                                        <option value="PT">PT</option>
                                        <option value="Perorangan">Perorangan</option>
                                        </select>
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">            
                                      </div>       
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @stop