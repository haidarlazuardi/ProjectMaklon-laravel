@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-content">
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Brand</h3>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Nama Brand</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>NAMA BRAND</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_brand as $brand)
                                        <tr>
                                        <td>{{$brand->brand}}</td>
                                            <td>
                                            <a href="/brand/{{$brand->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau dihapus?')"><i class="lnr lnr-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->
                    </div>
                    <div class="col-md-6">
                        <!-- TABLE NO PADDING -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tambah Brand Baru</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/brand/create" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Brand</label>
                                    <input name="brand"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Brand">            
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                  </div>
                            </div>
                        </div>
                        <!-- END TABLE NO PADDING -->
                    </div>
                </div>
                
                        <!-- END CONDENSED TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@stop