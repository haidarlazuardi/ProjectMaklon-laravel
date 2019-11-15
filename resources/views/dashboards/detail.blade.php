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
                    <div class="panel">
                            <div class="x_title">
                                <h2 style="margin-left:2%;">Detail Tahapan</h2>
                        <div class="panel-heading">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <th>Aktifitas</th>
                                    <th>Departemen</th>
                                    <th>Status</th>
                                    <th>Penyelesaian</th>
                                    <th>LT</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>

                                        <tr>

                                            <th>Pencarian Maklon</th>
                                            <td>PRO</td>
                                            @if($maklon_project->status_maklon == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            <td></td>
                                            <td></td>
                                            <td>
                                           <a href="/project/{{ $project }}/{{ $maklon_sementara}}/releted" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a>
                                           </td>


                                        </tr>

                                        <tr>

                                                <th>Approval margin</th>
                                                <td>GP</td>
                                                @if($maklon_project->status_harga == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                                <td></td>
                                                <td></td>
                                                <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/penawaran" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a>
                                                </td>


                                            </tr>

                                        <tr>

                                                <th>Dokumen Legalitas</th>
                                                <td>LEGAL</td>
                                                @if($maklon_project->status_dokumen == 2)
                                                <td>done</td>
                                                @else
                                                <td>on progress</td>
                                                @endif
                                                <td></td>
                                                <td></td>
                                                <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/legalitas" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a></td>

                                            </tr>

                                            <tr>

                                                    <th>MOU</th>
                                                    <td>LEGAL</td>
                                                    @if($maklon_project->status_mou == 2)
                                                    <td>done</td>
                                                    @else
                                                    <td>on progress</td>
                                                    @endif
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/mou" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a></td>

                                                </tr>

                                                <tr>

                                                    <th>APPROVAL PROJECT</th>
                                                    <td>PV</td>
                                                    @if($maklon_project->status_approval == 2)
                                                    <td>done</td>
                                                    @else
                                                    <td>on progress</td>
                                                    @endif
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                    <a href="/project/{{ $project }}/{{ $maklon_sementara}}/approval" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a></td>
                                                    </tr>

                                                    <tr>

                                                            <th>TRIAL</th>
                                                            <td>RnD</td>
                                                            @if($maklon_project->status_trial == 2)
                                                            <td>done</td>
                                                            @else
                                                            <td>on progress</td>
                                                            @endif
                                                            <td></td>
                                                            <td></td>
                                                            <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/trial" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a></td>
                                                        </tr>

                                                    <tr>

                                                            <th>AUDIT FOOD SAFETY</th>
                                                            <td>QA</td>
                                                            @if($maklon_project->status_food == 2)
                                                            <td>done</td>
                                                            @else
                                                            <td>on progress</td>
                                                            @endif
                                                            <td></td>
                                                            <td></td>
                                                            <TD><a href="/project/{{ $project }}/{{ $maklon_sementara}}/pendukung" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a></TD>
                                                        </tr>

                                                <tr>

                                                        <th>KONTRAK KERJASAMA</th>
                                                        <td>PRO</td>
                                                        @if($maklon_project->status_approval == 2)
                                                        <td>done</td>
                                                        @else
                                                        <td>on progress</td>
                                                        @endif
                                                        <td></td>
                                                        <td></td>
                                                        <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/kontrak" type="button" class="btn btn-info"><i class="lnr lnr-rocket"></i></a></td>
                                                    </tr>

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
</div>


<script src="{{asset('public/js/datatables.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

@stop
