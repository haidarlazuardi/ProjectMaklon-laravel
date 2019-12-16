@extends('layout.master')

@section('content')
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="well" style="overflow: auto" >
                <h1>Detail Project</h1>
              </div>
            </div>
          <div class="panel-body">
            <table class="table">
              <thead>

                  <tr>
                      <td>No PKP</td>
                      <td>
                      <input name="nama_maklon" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->id_pkp}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Nama Project</td>
                      <td>
                      <input name="nama_pic" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->nama_project}}">
                      </td>
                    </tr>
                    {{-- <tr>
                      <td>Alamat</td>
                      <td>
                          <textarea name="alamat" disabled class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </td>
                    </tr> --}}
                    <tr>
                      <td>Kategori</td>
                      <td>
                          <input name="kontak" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->category}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Sales Forecast</td>
                      <td>
                          <input name="email" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->sales_forecast}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Selling Price</td>
                      <td>
                        <input name="skala_kategori" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->selling_price}}">

                      </td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>
                          <input name="skala_kategori" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->brand}}">
                      </td>
                    </tr>
                    <tr>
                      <td>Gramasi</td>
                      <td>
                          <input name="berbadan_hukum" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$project->gramasi}}">
                      </td>
                    </tr>
                    <tr>
                        <td>UOM</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->uom}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Configuration</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->configuration}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Umur Simpan</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->umur_simpan}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Gambaran Proses</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->gambaran_proses}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Priority Project</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->priority_project}}">
                        </td>
                      </tr>
                      <tr>
                        <td>timeline</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->timeline}}">
                        </td>
                      </tr>
                      <tr>
                        <td>status Project</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->status_project}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Idea</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->idea}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->gender}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Target Dari Umur</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->dari_umur}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Sampai Umur</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->sampai_umur}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Uniqueness</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->uniqueness}}">
                        </td>
                      </tr>
                      <tr>
                        <td>reason</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->reason}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Estimated</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->estimated}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Launch</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->launch}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Years</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->years}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Tanggal Launch</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->tgl_launch}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Competitive</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->competitive}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Competitor</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->competitor}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Aisle</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->aisle}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Product Form</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->product_form}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Bpom</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->bpom}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Olahan</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->olahan}}">
                        </td>
                      </tr>
                      <tr>
                        <td>AKG</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->akg}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Primary</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->primary}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Secondary</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->secondary}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Tertiary</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->tertiary}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Prefered Flavour</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->prefered_flavour}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Product Benefit</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->product_benefits}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Mandatory ingredient</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->mandatory_ingredient}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Price</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->price}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Ket no</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->ket_no}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Jenis</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->jenis}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Author</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->author}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Note Freeze</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->note_freeze}}">
                        </td>
                      </tr>
                      <tr>
                        <td>Created_date</td>
                        <td>
                            <input name="keterangan" type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->created_date}}">
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
