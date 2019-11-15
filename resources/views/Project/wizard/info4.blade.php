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


                <button type="button" class="btn btn-info" data-toggle="modal" style="margin-left:"
                    data-target="#exampleModalCenter">
                    Lihat review
                </button>


                @if($legalitas->isEmpty())
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModallegal"><i
                        class="lnr lnr-plus-circle"></i> Input Dokumen</button>
                    @else
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModaltrue"><i
                    class="lnr lnr-plus-circle"></i> Update Dokumen</button>
                    @endif
                        @if (in_array(auth()->user()->role,['LEGAL']))
                <button type="button" class="btn btn-warning " style="float:right;" data-toggle="modal"
                    data-target="#exampleModal"><i class="lnr lnr-pencil"></i> Review</button>
                        @else
                <button type="button" disabled class="btn btn-warning " style="float:right;" data-toggle="modal"
                        data-target="#exampleModal"><i class="lnr lnr-pencil"></i> Review</button>
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
                        <tr>

                            <th>Akta pendirian</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_pendirian)}}"
                                    download="{{$l->akta_pendirian}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pendirian}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_akta_pendirian == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/Akta/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/Akta/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th>Akta penyesuaian</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_penyesuaian)}}"
                                    download="{{$l->akta_penyesuaian}}"><i class="fa fa-download"></i>
                                    {{$l->akta_penyesuaian}} </a></td>
                            <td>
                                APPROVE<br>
                                @if($legalitasz->status_akta_penyesuaian == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/penyesuaian/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/penyesuaian/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Akta Susunan Direksi</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_susunan_direksi)}}"
                                    download="{{$l->akta_susunan_direksi}}"><i class="fa fa-download"></i>
                                    {{$l->akta_susunan_direksi}} </a></td>
                            <td>
                                APPROVE<br>
                                @if($legalitasz->status_susunan_direksi == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/susunan/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/susunan/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Akta Wewenang Direksi</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_wewenang_direksi)}}"
                                    download="{{$l->akta_wewenang_direksi}}"><i class="fa fa-download"></i>
                                    {{$l->akta_wewenang_direksi}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_wewenang_direksi== 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/wewenang/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/wewenang/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>SIUP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->siup)}}"
                                    download="{{$l->siup}}"><i class="fa fa-download"></i>
                                    {{$l->siup}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_siup == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/siup/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/siup/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NIB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->nib)}}"
                                    download="{{$l->nib}}"><i class="fa fa-download"></i>
                                    {{$l->nib}} </a></td>
                            <td>
                                    APPROVE<br>
                                    @if($legalitasz->status_nib == 2)
                                    <label class="switch">
                                        <input type="checkbox" checked = "true" onchange="window.location.href='/nib/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                    @else
                                    <label class="switch">
                                            <input type="checkbox" onchange="window.location.href='/nib/{{ $legalitasz->id }}'">
                                            <span class="slider round"></span>
                                        </label></td>
                                    @endif
                                </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>TDP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->tdp)}}"
                                    download="{{$l->tdp}}"><i class="fa fa-download"></i>
                                    {{$l->tdp}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_tdp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/tdp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/tdp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td>

                            </td>
                        </tr>

                        <tr>
                            <th>IUI</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->iui)}}"
                                    download="{{$l->iui}}"><i class="fa fa-download"></i>
                                    {{$l->iui}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_iui == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/iui/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/iui/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NPWP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->npwp)}}"
                                    download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                    {{$l->npwp}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_npwp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td></td>
                        </tr>

                        <tr>
                            <th>IZIN DOMISILI</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->izin_domisili)}}"
                                    download="{{$l->izin_domisili}}"><i class="fa fa-download"></i>
                                    {{$l->izin_domisili}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_izin_domisili == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/izindomisili/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/izindomisili/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td></td>
                        </tr>

                        <tr>
                            <th>IZIN LINGKUNGAN</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->izin_lingkungan)}}"
                                    download="{{$l->izin_lingkungan}}"><i class="fa fa-download"></i>
                                    {{$l->izin_lingkungan}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_izin_lingkungan == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/izinlingkungan/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/izinlingkungan/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>


                        <tr>
                            <th>PSB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->psb)}}"
                                    download="{{$l->psb}}"><i class="fa fa-download"></i>
                                    {{$l->psb}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_psb == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>SPPl/AMDAL/UKL/UPL</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->sppl_amdal_ukl_upl)}}"
                                    download="{{$l->sppl_amdal_ukl_upl}}"><i class="fa fa-download"></i>
                                    {{$l->sppl_amdal_ukl_upl}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_sppl_amdal_ukl_upl == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/amdal/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/amdal/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>SPPKP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->sppk)}}"
                                    download="{{$l->sppk}}"><i class="fa fa-download"></i>
                                    {{$l->sppk}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_sppk == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/sppk/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/sppk/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>

                        </tr>


                        @elseif($m->mamaklon->berbadan_hukum == 'Perorangan')


                        <tr>
                            <th>KTP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->ktp)}}"
                                    download="{{$l->ktp}}"><i class="fa fa-download"></i>
                                    {{$l->ktp}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_ktp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/ktp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/ktp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>NPWP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->npwp)}}"
                                    download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                    {{$l->npwp}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_npwp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>

                        </tr>

                        <tr>
                            <th>IUMK</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->iumk)}}"
                                    download="{{$l->iumk}}"><i class="fa fa-download"></i>
                                    {{$l->iumk}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_iumk == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/iumk/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/iumk/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>

                        </tr>

                        <tr>
                            <th>SPPL/AMDAL/UKL/UPL</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->sppl_amdal_ukl_upl)}}"
                                    download="{{$l->sppl_amdal_ukl_upl}}"><i class="fa fa-download"></i>
                                    {{$l->sppl_amdal_ukl_upl}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_sppl_amdal_ukl_upl == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/amdal/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/amdal/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>PSB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->psb)}}"
                                    download="{{$l->psb}}"><i class="fa fa-download"></i>
                                    {{$l->psb}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_psb == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                  <input type="checkbox" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>

                        </tr>
                        @elseif($m->mamaklon->berbadan_hukum == 'CV')

                        <tr>

                            <th>Akta pendirian</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_pendirian)}}"
                                    download="{{$l->akta_pendirian}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pendirian}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_akta_pendirian == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/Akta/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/Akta/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td>
                            </td>
                        </tr>

                        <tr>

                            <th>Akta Pengurus</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->akta_pengurus)}}"
                                    download="{{$l->akta_pengurus}}"><i class="fa fa-download"></i>
                                    {{$l->akta_pengurus}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_akta_pengurus == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/pengurus/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/pengurus/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td>
                            </td>
                        </tr>


                        <tr>
                            <th>SIUP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->siup)}}"
                                    download="{{$l->siup}}"><i class="fa fa-download"></i>
                                    {{$l->siup}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_siup == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/siup/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/siup/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NIB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->nib)}}"
                                    download="{{$l->nib}}"><i class="fa fa-download"></i>
                                    {{$l->nib}} </a></td>
                            <td>
                                    APPROVE<br>
                                    @if($legalitasz->status_nib == 2)
                                    <label class="switch">
                                        <input type="checkbox" checked = "true" onchange="window.location.href='/nib/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                    @else
                                    <label class="switch">
                                            <input type="checkbox" onchange="window.location.href='/nib/{{ $legalitasz->id }}'">
                                            <span class="slider round"></span>
                                        </label></td>
                                    @endif
                                </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>TDP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->tdp)}}"
                                    download="{{$l->tdp}}"><i class="fa fa-download"></i>
                                    {{$l->tdp}} </a></td>
                            <td>APPROVE<br>
                                @if($legalitasz->status_tdp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/tdp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/tdp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td>

                            </td>
                        </tr>

                        <tr>
                            <th>IUI</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->iui)}}"
                                    download="{{$l->iui}}"><i class="fa fa-download"></i>
                                    {{$l->iui}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_iui == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/iui/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/iui/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NPWP</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->npwp)}}"
                                    download="{{$l->npwp}}"><i class="fa fa-download"></i>
                                    {{$l->npwp}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_npwp == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/npwp/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td></td>
                        </tr>

                        <tr>
                            <th>IZIN DOMISILI</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->izin_domisili)}}"
                                    download="{{$l->izin_domisili}}"><i class="fa fa-download"></i>
                                    {{$l->izin_domisili}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_izin_domisili == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/izindomisili/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/izindomisili/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            <td></td>
                        </tr>

                        <tr>
                            <th>IZIN LINGKUNGAN</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->izin_lingkungan)}}"
                                    download="{{$l->izin_lingkungan}}"><i class="fa fa-download"></i>
                                    {{$l->izin_lingkungan}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_izin_lingkungan == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/izinlingkungan/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/izinlingkungan/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>


                        <tr>
                            <th>PSB</th>
                            <td><a class="btn btn-success" href="{{URL::asset('../file/'.@$l->psb)}}"
                                    download="{{$l->psb}}"><i class="fa fa-download"></i>
                                    {{$l->psb}} </a></td>
                            <td> APPROVE<br>
                                @if($legalitasz->status_psb == 2)
                                <label class="switch">
                                    <input type="checkbox" checked = "true" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                    <span class="slider round"></span>
                                </label></td>
                                @else
                                <label class="switch">
                                        <input type="checkbox" onchange="window.location.href='/psb/{{ $legalitasz->id }}'">
                                        <span class="slider round"></span>
                                    </label></td>
                                @endif
                            </td>
                            <td></td>
                        </tr>

                @endif
                    </tbody>
                @endforeach
                    @endforeach
                </table>

        </div>
        </form>
              </table>
    </div>
</div>
</div>
</div>

</table>


<br>

<br>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">


        <a href="/project/{{$project}}/{{$maklon_sementara}}/penawaran">
            <button type="button" class="btn btn-primary">Previous</button>
        </a>
        <a href="/project/{{$project}}/{{$maklon_sementara}}/mou">
            <button type="button" class="btn btn-success">Next</button>
        </a>
    </div>

</div>
</div>
</div>

<!-- Central Modal Small -->
<div class="modal fade" id="myModaltrue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

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
        @include('Project.wizard.updatelegal')
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" action="/project/info//review" method="post"
                    enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" name="review" id="message-text"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send message</button>
                </form>
            </div>
        </div>
    </div>
</div>

@if(in_array(auth()->user()->role,['Admin','PRO','PV']))



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endif
{{-- modal INSERT LEGALITAS --}}
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

    {{-- end modal insertlegalt --}}




</div>
</div>

</div>
</div>
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
