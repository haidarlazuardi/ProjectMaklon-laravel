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

    * {
        font-family: 'Roboto', sans-serif;
    }

    @keyframes click-wave {
        0% {
            height: 40px;
            width: 40px;
            opacity: 0.35;
            position: relative;
        }

        100% {
            height: 200px;
            width: 200px;
            margin-left: -80px;
            margin-top: -80px;
            opacity: 0;
        }
    }

    .option-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 13.33333px;
        right: 0;
        bottom: 0;
        left: 0;
        height: 40px;
        width: 40px;
        transition: all 0.15s ease-out 0s;
        background: #cbd1d8;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1000;
    }

    .option-input:hover {
        background: #9faab7;
    }

    .option-input:checked {
        background: #40e0d0;
    }

    .option-input:checked::before {
        height: 40px;
        width: 40px;
        position: absolute;
        content: '✔';
        display: inline-block;
        font-size: 26.66667px;
        text-align: center;
        line-height: 40px;
    }

    .option-input:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
    }

    .option-input.radio {
        border-radius: 50%;
    }

    .option-input.radio::after {
        border-radius: 50%;
    }

    /*
body {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: box;
  background: #e8ebee;
  color: #9faab7;
  font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
  text-align: center;
}
body div {
  padding: 5rem;
}
body label {
  display: block;
  line-height: 40px;
} */
</style>
<div id="step-4">

    <div class="container">
        <div id="step-1" class="content" style="display: block;">
            <form class="form-horizontal form-label-left"
                action="/project/info/legalitas/{{ $project }}/{{ $maklon_sementara }}" method="post"
                enctype="multipart/form-data">
                {{csrf_field()}}
                <br>
                {{-- <div class="form-group">
        <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
        <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
            <input name="file" type="file" id="first-name" required="required" class="form-control">
        </div>
        <div class="col-md-5 col-sm-6 col-xs-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> --}}

                <button type="button" class="btn btn-info" data-toggle="modal" style="float-left:"
                    data-target="#exampleModalCenter">
                    Lihat review
                </button>
                <div style="float:right">
                    @if (in_array(auth()->user()->role,['LEGAL','Admin']))
                    <button type="button" class="btn btn-warning " data-toggle="modal" style="margin-left:"
                        data-target="#exampleModalCenter1">
                        Review
                    </button>
                </div>
                <div class="modal fade float-right" id="exampleModalCenter1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-top" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                            @if ($legalitas->isEmpty())

                            @else
                            <form class="form-horizontal form-label-left"
                                action="/project/info/review/{{$legalitasz->id}}" method="post"
                                enctype="multipart/form-data">
                                {{csrf_field()}}

                                @endif

                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="control-label">Review</label>
                                        <textarea class="form-control" name="review" cols="30" rows="4"></textarea>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" @if (in_array(auth()->user()->role,['LEGAL','Admin']))
                                    @else disabled @endif class="btn btn-primary">submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
        </div>


        </form>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if ($legalitas->isEmpty())

                        @else
                        <p>{{$legalitasz->review}}</p>

                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        @if($legalitas->isEmpty())
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModallegal"><i
                class="lnr lnr-plus-circle"></i> Input Dokumen</button>
        <div class="modal fade" id="exampleModallegal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                        <form class="form-horizontal form-label-left"
                            action="/project/info/legalitas/{{ $project }}/{{ $maklon_sementara }}" method="post"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div id="step-3">
                                {{-- @foreach(session()->get('maklon') as $m) --}}
                                @include('Project.wizard.insertlegal')

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                        </form>


                    </div>
                </div>

            </div>
        </div>

        @else
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModaltrue"><i
                class="lnr lnr-plus-circle"></i> Update Dokumen</button>
        @endif
    </div>

</div>


@endif



<div class="container">
    <div class="x_panel">
        <div class="x_content">
            <div class="panel">

                <table class="table table-striped jambo_table bulk_action">
                    @foreach ($legalitas as $l)

                    @foreach ($maklons as $m)

                    <tbody>
                        @if($m->mamaklon->berbadan_hukum == 'PT')
                        @include('Project.wizard.formlegalPT')
                        @if($legalitasz->status_akta_pendirian == 2
                        && $legalitasz->status_akta_penyesuaian == 2 && $legalitasz->status_susunan_direksi
                        == 2 && $legalitasz->status_wewenang_direksi == 2
                        && $legalitasz->status_siup == 2 && $legalitasz->status_nib == 2 &&
                        $legalitasz->status_tdp== 2
                        && $legalitasz->status_iui == 2 && $legalitasz->status_npwp == 2 &&
                        $legalitasz->status_izin_domisili == 2
                        && $legalitasz->status_izin_lingkungan == 2 && $legalitasz->status_psb == 2 &&
                        $legalitasz->status_sppl_amdal_ukl_upl == 2
                        && $legalitasz->status_sppk == 2)


                        @if (in_array(auth()->user()->role,['LEGAL','Admin']))
                        <a onclick="window.location.href='/approvelegal/{{$m->id}}'" class="btn btn-success">
                            ALL DOCUMENTS ARE VERIFIED</a>
                        @elseif(in_array(auth()->user()->role,['LEGAL','Admin']))
                        <a onclick="window.location.href='/approvelegal/{{$m->id}}'" disabled class="btn btn-success">
                            Not Complete</a>
                        @else

                        @endif
                        @endif
                        @elseif($m->mamaklon->berbadan_hukum == 'Perorangan')
                        @include('Project.wizard.formlegalIndividu')

                        @if($legalitasz->status_npwp == 2 && $legalitasz->status_ktp == 2
                        && $legalitasz->status_iumk == 2 && $legalitasz->status_sppl_amdal_ukl_upl == 2
                        && $legalitasz->status_psb == 2)

                        <a onclick="window.location.href='/approvelegal/{{$m->id}}'" class="btn btn-success">
                            ALL DOCUMENTS ARE VERIFIED</a>
                        @else
                        <a onclick="window.location.href='/approvelegal/{{$m->id}}'" disabled class="btn btn-success">
                            Not Complete</a>

                        @endif

                        @elseif($m->mamaklon->berbadan_hukum == 'CV')

                        @include('Project.wizard.formlegalCv')
                        @if($legalitasz->status_akta_pendirian == 2
                        && $legalitasz->status_susunan_direksi == 2 && $legalitasz->status_siup == 2 &&
                        $legalitasz->status_nib == 2 && $legalitasz->status_tdp== 2
                        && $legalitasz->status_iui == 2 && $legalitasz->status_npwp == 2 &&
                        $legalitasz->status_izin_domisili == 2
                        && $legalitasz->status_izin_lingkungan == 2 && $legalitasz->status_psb == 2 )

                        <a onclick="window.location.href='/approvelegal/{{$m->id}}'" class="btn btn-success">
                            ALL DOCUMENTS ARE VERIFIED</a>
                        @else
                        <a onclick="window.location.href='/approvelegal/{{$m->id}}'" disabled class="btn btn-success">
                            Not Complete</a>

                        @endif
                        @endif
                    </tbody>
                    @endforeach
                    @endforeach
                </table>


            </div>

            </table>
        </div>

        <a href="/project/{{$project}}/{{$maklon_sementara}}/penawaran">
            <button type="button" class="btn btn-primary">Previous</button>
        </a>
        <a href="/project/{{$project}}/{{$maklon_sementara}}/mou">
            <button type="button" class="btn btn-success">Next</button>
        </a>


    </div>
</div>
</div>

</table>


<br>

<br>

<div class="modal fade" id="myModaltrue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog " role="document">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Modal Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($legalitas->isEmpty())

                @else

                <form class="form-horizontal form-label-left" action="/project/{{$legalitasz->id}}/updatelegal"
                    method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @endif
                    @if($legalitas->isEmpty())
                    There no data availlable
                    @else
                    @include('Project.wizard.updatelegal')
                    @endif
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>





</div>


{{-- End Content --}}


<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>





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
</body>

</html>
@endsection
