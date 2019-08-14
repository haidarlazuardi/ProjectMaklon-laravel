@extends('layout.master')

@section('content')

    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
            <div class="panel">
              <div class="panel-heading">
                <div class="well" style="overflow: auto">
                  <h1>Detail Data</h1>
                </div>
              </div>
            <div class="panel-body">                                                    
              <table class="table">
                <thead>
                    
                    <tr>
                        <td>Nama Perusahaan</td>  
                        <td>
                            <input name="nama_maklon" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->nama_maklon  }}">            
                        </td>
                      </tr> 
                      <tr>
                        <td>Nama PIC</td>  
                        <td>
                            <input name="nama_pic" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->nama_pic  }}">            
                        </td>
                      </tr>               
                      <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea name="alamat" disabled class="form-control" id="exampleFormControlTextarea1" rows="3">{{$maklon->alamat}}</textarea>
                        </td>
                      </tr>
                      <tr>
                        <td>Nomor Telepon</td>
                        <td>
                            <input name="kontak" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->kontak }}">            
                        </td>
                      </tr>
                      <tr>
                        <td>Alamat Email</td>
                        <td>
                            <input name="email" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->email }}">            
                        </td>
                      </tr>
                      <tr>
                        <td>Fasilitas</td>
                        <td>
                            <a class="btn btn-success"  href="{{URL::asset('../images/'.@$maklon->fasilitas_produksi)}}" download="{{$maklon->fasilitas_produksi}}"><i class="fa fa-download"></i> {{$maklon->fasilitas_produksi }}</a>
                            
                        </td>
                      </tr>
                      <tr>
                        <td>Skala Perusahaan</td>
                        <td>
                            <input name="skala_kategori" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->skala_kategori }}">            
                        </td>
                      </tr>
                      <tr>
                        <td>Berbadan Hukum</td>
                        <td>
                            <input name="berbadan_hukum" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon" value="{{$maklon->berbadan_hukum }}">            
                        </td>
                      </tr>  
                      <tr>
                          <td>Keterangan</td>
                          <td>
                              <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" value="{{$maklon->keterangan }}">            
                          </td>
                        </tr>  
                         
                </thead>
                </table>
            </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    @stop