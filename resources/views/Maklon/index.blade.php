@extends('layout.master')

@section('content')
<style>
    a.tooltips {
        position: relative;
        display: inline;
        text-decoration: none;
    }

    a.tooltips span {
        position: absolute;
        width: 100px;
        color: #FFFFFF;
        background: #000000;
        height: 25px;
        line-height: 25px;
        text-align: center;
        visibility: hidden;
        border-radius: 3px;
    }

    a.tooltips span:after {
        content: '';
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -8px;
        width: 0;
        height: 0;
        border-bottom: 8px solid #000000;
        border-right: 8px solid transparent;
        border-left: 8px solid transparent;
    }

    a:hover.tooltips span {
        visibility: visible;
        opacity: 0.8;
        top: 30px;
        left: 50%;
        margin-left: -76px;
        z-index: 999;
    }
</style>

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>DATA MAKLON</h2>
                            <div class="panel_toolbox">
                                <a href="maklon/create"><button type="button" class="btn btn-primary">Tambah
                                        Maklon</button></a>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>

                            <div>
                                <table class="table table-striped jambo_table bulk_action" id="datatable">
                                    <thead>
                                        <tr>
                                            <th># </th>
                                            <th>NAMA MAKLON </th>
                                            <th>KATEGORI PRODUK</th>
                                            <th>PRODUCT EXISTING</th>
                                            <th>VARIAN PRODUCT</th>
                                            <th>AKSI</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data_maklon as $maklon)
                                        <tr>
                                            <td>{{ $no++}}</td>
                                            <td>{{$maklon->nama_maklon}}</td>
                                            <td>{{$maklon->kategori}}</td>
                                            <td>{{$maklon->product_exist}}</td>
                                            <td>{{$maklon->keterangan}}</td>

                                            <td>
                                                <a class="tooltips" href="/maklon/{{$maklon->id}}/lihat"><button
                                                        class="btn btn-round btn-primary"><i
                                                            class="lnr lnr-eye"></i></button><span>Detail</span></a>
                                                <a class="tooltips" href="/maklon/{{$maklon->id}}/edit"><button
                                                        class="btn btn-warning"><i
                                                            class="lnr lnr-pencil"></i></button><span>Edit</span></a>
                                                <a class="tooltips" href="/maklon/{{$maklon->id}}/delete"
                                                    onclick="return confirm('Yakin Mau di Hapus')"><button
                                                        class="btn btn-danger"><i
                                                            class="lnr lnr-trash"></i></button><span>Hapus </span></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>


    @stop
