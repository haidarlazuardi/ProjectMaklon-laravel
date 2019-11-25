@extends('layouts.layoutframe',['maklons'=>$maklons])

@section('content')
{{-- Content --}}
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
<div class="x_panel">
    <div class="x_content">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-12 col-offset-2">
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>TRIAL
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a class="close-link">
                                    <i class="fa fa-close">
                                    </i>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped responsive" id="datatable">
                            <thead>
                                <tr>
                                    <th>NO Trial</th>
                                    <th>File
                                    </th>
                                    <th>Tanggal
                                    </th>
                                    <th>
                                        Kategori
                                    </th>
                                    <th>Status</th>
                                    <th>Approve
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trial as $t)
                                <tr>
                                    <td>{{$t->trial_id}}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{URL::asset('../images/'.@$t->summary)}}"
                                            download="{{$t->summary}}">
                                            <i class="fa fa-download">
                                            </i> {{$t->summary}}
                                        </a>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($t->tanggal)->formatLocalized("%D") }}
                                    </td>
                                    <td>
                                        {{$t->kategori}}
                                    </td>
                                    <td>{{$t->status}}</td>
                                    <td>

                                        @if (in_array(auth()->user()->role,['RND','Admin']))
                                        @if($t->status == 'good')
                                        <label class="switch">
                                            <input type="checkbox" checked="true">
                                            <span class="slider round"></span>
                                        </label>
                                        @else
                                        <label class="switch">
                                            <input type="checkbox" disabled>
                                            <span class="slider round"></span>
                                        </label>
                                        @endif
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @if ($trial->where('status', 'good')->count() >= 3)
                                <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="6">
                                        <button class="btn btn-success" onclick="window.location.href='/finaltrial/{{$trials->id}}'">Final</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-12 col-offset-2">
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <form action="/project/trial" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">NOMOR
                        </label>
                        <input name="trial_id" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nomor">
                    </div>
                    <input type="hidden" name="project_id" value="{{$project}}">
                    <input type="hidden" name="maklon_id" value="{{$maklon_sementara}}">

                    <div class="form-group">
                        <label for="first-name">tanggal trial
                        </label>
                        <input name="tanggal" type="date" required="required" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori
                        </label>
                        <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                            {{-- @foreach ($trial as $item)
              @if ($item->kategori == "procces")
              @else --}}
                            <option value="procces">Procces
                            </option>
                            {{-- @endif --}}
                            {{-- @if ($item->kategori == "fillpack")
              @else --}}
                            <option value="fillpack">Fillpack
                            </option>
                            {{-- @endif
              @if ($item->kategori == "product")
              @else --}}
                            <option value="product">Product
                            </option>
                            {{-- @endif
              @endforeach --}}
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="first-name">Summary
                        </label>
                        <input name="summary" type="file" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status
                        </label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="Good">Good
                            </option>
                            <option value="Not Good">Not Good
                            </option>
                        </select>
                    </div>

                    @if (in_array(auth()->user()->role,['RND','Admin']))
                    <button type="submit" class="btn btn-primary" style="float:right; display:block;">Submit
                    </button>
                    @else
                        <button type="submit" class="btn btn-primary" style="float:right; display:block;" disabled>Submit
                    </button>
                    @endif
            </div>
            </form>
        </div>
    </div>
</div>
<div class="ln_solid">
</div>
<div class="form-group">
    <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">
        <a href="/project/{{$project}}/{{$maklon_sementara}}/approval">
            <button type="button" class="btn btn-primary">Previous
            </button>
        </a>
        <a href="/project/{{$project}}/{{$maklon_sementara}}/pendukung">
            <button type="button" class="btn btn-success">Next
            </button>
        </a>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{{-- End Content --}}
<div class="clearfix">
</div>
</div>

<script src="{{asset('public/js/datatables.min.js')}}">
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}">
</script>
<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}">
</script>
<script type="text/javascript">
    // $('#Table').DataTable({
    //     "language": {
    //       "search": "Cari :",
    //       "lengthMenu": "Tampilkan _MENU_ data",
    //       "zeroRecords": "Tidak ada data",
    //       "emptyTable": "Tidak ada data",
    //       "info": "Menampilkan data _START_  - _END_  dari _TOTAL_ data",
    //       "infoEmpty": "Tidak ada data",
    //       "paginate": {
    //         "first": "Awal",
    //         "last": "Akhir",
    //         "next": ">",
    //         "previous": "<"
    //       }
    //     }
    //   });
    $('#summ').change(function () {
        console.log(document.getElementById('summ').value);
    })
    $('#maklon').change(function () {
        var maklon = $('#maklon').find(':selected').data('maklon');
        var pic = $('#maklon').find(':selected').data('pic');
        var alamat = $('#maklon').find(':selected').data('alamat');
        var kontak = $('#maklon').find(':selected').data('kontak');
        var email = $('#maklon').find(':selected').data('email');
        var fasilitasProduksi = $('#maklon').find(':selected').data('fasilitas');
        var skalaKategori = $('#maklon').find(':selected').data('skala');
        var berbadanHukum = $('#maklon').find(':selected').data('hukum');
        var id = $('#maklon').find(':selected').data('id');
        $('#idMaklon').val(id);
        $('#maklonId').val(id);
        $('#nameMaklon').text(maklon);
        $('#namePic').text(pic);
        $('#alamat').text(alamat);
        $('#kontak').text(kontak);
        $('#email').text(email);
        $('#fasilitasProduksi').text(fasilitasProduksi);
        $('#skalaKategori').text(skalaKategori);
        $('#berbadanHukum').text(berbadanHukum);
    });
</script>
</body>

</html>
@endsection
