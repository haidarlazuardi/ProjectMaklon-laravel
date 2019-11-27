@extends('layouts.layoutframe',['maklons'=>$maklons ])

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



@if($maklon_project_id->isEmpty())
<div style="height: 281px;">
    <div id="step-1" class="content" style="display: block;">
        <form class="form-horizontal form-label-left" method="post"
            action="/project/info/{{ $maklon_project_id}}/penawaran" enctype="multipart/form-data">
            {{csrf_field()}}
            <br>
            <div class="form-group">
                <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
                    <input name="file" type="file" id="first-name" required="required" class="form-control">
                </div>

                @if($maklon_project_id-> isEmpty())
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <button type="submit" class="btn btn-primary" disabled>Submit</button>
                </div>
                @else
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
                @endif
            </div>
        </form>

        <div class="row">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Penawaran</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                            <div class="row no-gutters">
                                    <div class="col-12 col-sm-6 col-md-8"></div>
                                    <table class="table table-striped responsive">
                                        <thead>
                                            <tr>

                                </tr>
                            </thead>
                            <tbody>
                                <td>Tidak ditemukan data</td>
                                </tr>

                            </tbody>
                        </table>
                        @else
                        <div style="height: 281px;">
                                <div id="step-1" class="content" style="display: block;">
                                    <form class="form-horizontal form-label-left" method="post"
                                        action="/project/info/{{ $maklon_project->id}}/penawaran" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
                                                <input name="penawaran" type="file" id="first-name" required="required" class="form-control">
                                            </div>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Penawaran</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped responsive">
                            <thead>
                                <tr>
                                    <th class="column-title" style="display: table-cell;">Penawaran</th>
                                    <th class="column-title" style="display: table-cell;">Approve</th>

                                    {{-- <th class="column-title" style="display: table-cell;">Not Approve /
                                                            Approve</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($maklon_project_id as $fi)
                                <tr>

                                    <td><a class="btn btn-success" href="{{URL::asset('../images/'.@$fi->penawaran)}}"
                                            download="{{$fi->penawaran}}"><i class="fa fa-download"></i>
                                            {{$fi->penawaran}}</a></td>
                                    <td>

                                        @if( in_array(auth()->user()->role,['PV','Admin']))
                                            <label class="switch">
                                                    <input type="checkbox" @if ($fi->status_harga == 2) checked="true" @else @endif  onchange="window.location.href='/approvepenawaran/{{ $fi->id }}'">
                                                    <span class="slider round"></span>
                                                </label></td>
                                                @else

                                            <label class="switch">
                                                    <input type="checkbox" disabled onchange="window.location.href='/approvepenawaran/{{ $fi->id }}'">
                                                    <span class="slider round"></span>
                                                </label></td>
                                                @endif


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

{{-- <div id="step-4">

                <div  style="height: 281px;"><div id="step-1" class="content" style="display: block;">
                <form class="form-horizontal form-label-left" action="/project/info/{{ $maklon_project->id }}/penawaran"
method="post" enctype="multipart/form-data">
{{csrf_field()}}
<br>
<div class="form-group">
    <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
    <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
        <input name="file" type="file" id="first-name" required="required" class="form-control">
    </div>
    <div class="col-md-5 col-sm-6 col-xs-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

<br>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">
        {{--
                            <a href="/project/{{$project->id}}/maklon">
        <button type="button" class="btn btn-primary">Previous</button>
        </a> --}}

        <a href="/project/{{$project}}/{{$maklon_sementara}}/legalitas" style="float:right;" class="btn btn-success">
            Next
        </a>
    </div>
    @endif


</div>
</div>
</div>
</div>
<!-- End SmartWizard Content -->




<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

            <form class="form-horizontal form-label-left" action="/project/info/update/{{$maklon_id}}/{{$project_id}}"
method="post"
enctype="multipart/form-data">
<div id="step-3"> --}}
    {{-- @foreach(session()->get('maklon') as $m) --}}
    {{-- <div style="height: 281px;">
                            <div id="step-1" class="content"> --}}
    {{-- <h2>{{ $m }}</h2> --}}

    {{-- {{csrf_field()}}
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">



    <input type="hidden" name="maklon_id" value="{{ $maklon }}">

    <input type="hidden" name="project_id" value="{{ $project }}">


    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penawaran">Penawaran
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="file" id="penawaran" name="penawaran" required="required"
                class="form-control col-md-7 col-xs-12">
        </div>

    </div>

</div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}
</div>


</div>
</div>
</div>
<!-- End Modal -->

</div>
</div>
</div>
</div>
</div>



{{-- End Content --}}

<div class="clearfix"></div>
</div>



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

<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>

</body>

</html>

@endsection
