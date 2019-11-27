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
                            <h2>DATA MAKLON TERHAPUS</h2>
                            <div class="panel_toolbox">

                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>

                            <div>
                                <table class="table table-striped jambo_table bulk_action" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NAMA MAKLON </th>
                                            <th>KATEGORI PRODUK</th>
                                            <th>PRODUCT EXISTING</th>
                                            <th>VARIAN PRODUCT</th>
                                            <th>AKSI</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($maklon as $m)
                                        <tr>
                                            <td>{{ $no++}}</td>
                                            <td>{{$m->nama_maklon}}</td>
                                            <td>{{$m->kategori}}</td>
                                            <td>{{$m->product_exist}}</td>
                                            <td>{{$m->keterangan}}</td>

                                            <td>
                                                <a class="tooltips" href="/maklon/{{$m->id}}/lihat">
                                                    <button class="btn btn-round btn-primary">
                                                        <i class="lnr lnr-eye"></i></button>
                                                        <span>Detail</span></a>

                                                    <a class="tooltips" href="/maklon/trash/{{$m->id}}/kembalikan">
                                                    <button class="btn btn-round btn-success">
                                                        <i class="lnr lnr-undo"></i></button>
                                                        <span>Kembalikan Maklon</span></a>

                                                <a class="tooltips" href="/maklon/{{$m->id}}/delete"
                                                    onclick="return confirm('Yakin Mau di Hapus')"><button
                                                        class="btn btn-danger"><i class="lnr lnr-trash"></i></button><span>Hapus </span></a>
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
    @stop
