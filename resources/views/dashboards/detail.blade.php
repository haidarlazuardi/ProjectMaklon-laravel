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
                                        <th>Realisasi
                                        </th>
                                        <th>LT</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            @foreach ($maklons as $m)

                                            <th>Pencarian Maklon</th>
                                            <td>PRO</td>
                                            @if ($maklon_project)

                                            @if($maklon_project->status_maklon == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @php
                                            $datetime1 = new DateTime($m->project->created_at);
                                            $datetime2 = new DateTime($maklon_project->created_at);

                                            $interval = $datetime1->diff($datetime2);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime1->modify('+1 day');
                                                $weekday = $datetime1->format('w');

                                                if($weekday !== "0" && $weekday !== "5"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }

                                                }
                                                @endphp

                                                @else
                                                <td>on progress</td>


                                                @php
                                                $datetime1 = new DateTime();

                                                $datetime2 = new DateTime();

                                                $interval = $datetime1->diff($datetime2);
                                                $woweekends = 0;
                                                for($i=0; $i<=$interval->d; $i++){
                                                    $datetime1->modify('+1 day');
                                                    $weekday = $datetime1->format('w');

                                                    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                    $woweekends++;
                                                    }

                                                    }
                                                    @endphp
                                                    @endif

                                                    <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                    </td>
                                                    <td>
                                                        @if($pkp->priority_project == "Normal" || $interval->d <= 30 )
                                                        Under LT
                                                        @elseif($pkp->priority_project == "Normal" || $interval->d >= 30 )
                                                        over LT
                                                        @elseif($pkp->priority_project == "Urgen" || $interval->d <= 15 )
                                                        Under LT
                                                        @elseif($pkp->priority_project == "Urgen" || $interval->d >= 30 )
                                                        Over LT
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/project/{{ $project }}/{{ $maklon_sementara}}/releted"
                                                            type="button" class="btn btn-info"><i
                                                                class="lnr lnr-rocket"></i></a>
                                                    </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            @if ($maklon_project)
                                            <th>Approval Penawaran</th>
                                            <td>GP</td>
                                            @if ($maklon_project)

                                            @if($maklon_project->status_harga == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif

                                            @else
                                            <td>on progress</td>

                                            @endif
                                            @php

                                            $datetime3 = new DateTime($maklon_project->penawaran_upload);
                                            $datetime4 = new DateTime($maklon_project->penawaran_approve);
                                            $interval = $datetime3->diff($datetime4);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime1->modify('+1 day');
                                                $weekday = $datetime3->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }

                                                }
                                                @endphp

                                                @else
                                                <th>Approval Penawaran</th>
                                                <td>GP</td>
                                                <td>on progress</td>
                                                @php
                                                $datetime3 = new DateTime();
                                                $datetime4 = new DateTime();
                                                $interval = $datetime3->diff($datetime4);
                                                $woweekends = 0;
                                                for($i=0; $i<=$interval->d; $i++){
                                                    $datetime1->modify('+1 day');
                                                    $weekday = $datetime3->format('w');

                                                    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                    $woweekends++;
                                                    }

                                                    }
                                                    @endphp

                                                    @endif

                                                    <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <a href="/project/{{ $project }}/{{ $maklon_sementara}}/penawaran"
                                                            type="button" class="btn btn-info"><i
                                                                class="lnr lnr-rocket"></i></a>
                                                    </td>


                                        </tr>

                                        <tr>
                                            <th>Dokumen Legalitas</th>
                                            <td>LEGAL</td>
                                            @if ($maklon_project)
                                            @if($maklon_project->status_dokumen == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @else

                                            <td>on progress</td>
                                            @endif
                                            @if($legalitas)
                                            @php
                                            $datetime7 = new DateTime($legalitas->created_at);
                                            $datetime8 = new DateTime($maklon_project->legal_approve);
                                            //
                                            $interval = $datetime7->diff($datetime8);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime7->modify('+1 day');
                                                $weekday = $datetime8->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }
                                                }
                                                @endphp
                                                @else
                                                @php
                                                $datetime7 = new DateTime();
                                                $datetime8 = new DateTime(); //
                                                $interval = $datetime7->diff($datetime8);
                                                $woweekends = 0;
                                                for($i=0; $i<=$interval->d; $i++){
                                                    $datetime8->modify('+1 day');
                                                    $weekday = $datetime8->format('w');

                                                    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                    $woweekends++;
                                                    }
                                                    }
                                                    @endphp
                                                    @endif

                                                    <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                    </td>
                                                    <td></td>
                                                    <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/legalitas"
                                                            type="button" class="btn btn-info"><i
                                                                class="lnr lnr-rocket"></i></a></td>

                                        </tr>

                                        <tr>
                                            <th>MOU</th>
                                            <td>LEGAL</td>
                                            @if ($maklon_project)
                                            @if($maklon_project->status_mou == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @else
                                            <td>on Progress</td>
                                            @endif
                                            @if($mou)
                                            @php
                                            $datetime7 = new DateTime($m->project->created_at);
                                            $datetime8 = new DateTime($mou->file_upload);
                                            //
                                            $interval = $datetime7->diff($datetime8);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime7->modify('+1 day');
                                                $weekday = $datetime8->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }
                                                }
                                                @endphp
                                                @else
                                                @php
                                                $datetime9 = new DateTime();
                                                $datetime10 = new DateTime();
                                                //
                                                $interval = $datetime9->diff($datetime10);
                                                $woweekends = 0;
                                                for($i=0; $i<=$interval->d; $i++){
                                                    $datetime9->modify('+1 day');
                                                    $weekday = $datetime10->format('w');

                                                    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                    $woweekends++;
                                                    }
                                                    }
                                                    @endphp
                                                    @endif
                                                    <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                    </td>
                                                    <td></td>
                                                    <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/mou"
                                                            type="button" class="btn btn-info"><i
                                                                class="lnr lnr-rocket"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th>APPROVAL PROJECT</th>
                                            <td>PV</td>
                                            @if ($maklon_project)
                                            @if($maklon_project->status_approval == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @else

                                            <td>on progress</td>
                                            @endif
                                            @php
                                            $datetime11 = new DateTime($maklon_project->penawaran_upload);
                                            $datetime12 = new DateTime($maklon_project->project_approve);
                                            $interval = $datetime11->diff($datetime12);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime11->modify('+1 day');
                                                $weekday = $datetime12->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }
                                                }
                                                @endphp
                                                <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                </td>

                                                <td></td>
                                                <td>
                                                    <a href="/project/{{ $project }}/{{ $maklon_sementara}}/approval"
                                                        type="button" class="btn btn-info"><i
                                                            class="lnr lnr-rocket"></i></a></td>
                                        </tr>


                                        <tr>
                                            <th>TRIAL</th>
                                            <td>RnD</td>
                                            @if ($maklon_project)
                                            @if($maklon_project->status_trial == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @else
                                            <td>on progress</td>

                                            @endif
                                            @if($trial)
                                            @php
                                            $datetime13 = new DateTime($trial->created_at);
                                            $datetime14 = new DateTime($trial->trial_approve);
                                            $interval = $datetime13->diff($datetime14);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime13->modify('+1 day');
                                                $weekday = $datetime14->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }
                                                }
                                                @endphp
                                                @else

                                                @endif
                                                <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                </td>

                                                <td></td>
                                                <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/trial"
                                                        type="button" class="btn btn-info"><i
                                                            class="lnr lnr-rocket"></i></a></td>
                                        </tr>

                                        <tr>
                                            <th>Food Safety</th>
                                            <td>RnD</td>
                                            @if ($maklon_project)
                                            @if($maklon_project->status_food == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @else

                                            <td>on progress</td>
                                            @endif

                                            @if($foodsafe)
                                            @php
                                            $datetime11 = new DateTime($foodsafe->created_at);
                                            $datetime12 = new DateTime($maklon_project->food_approve);
                                            $interval = $datetime11->diff($datetime12);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime11->modify('+1 day');
                                                $weekday = $datetime12->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }
                                                }
                                                @endphp
                                                @else
                                                @endif
                                                <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                </td>

                                                <td></td>
                                                <td>
                                                    <a href="/project/{{ $project }}/{{ $maklon_sementara}}/approval"
                                                        type="button" class="btn btn-info"><i
                                                            class="lnr lnr-rocket"></i></a></td>
                                        </tr>


                                        <tr>
                                            <th>KONTRAK KERJASAMA</th>
                                            <td>PRO</td>
                                            @if ($maklon_project)
                                            @if($maklon_project->status_approval == 2)
                                            <td>done</td>
                                            @else
                                            <td>on progress</td>
                                            @endif
                                            @else
                                            <td>on progress</td>
                                            @endif

                                            @if($kontrak_kerjasama)
                                            @php
                                            $datetime11 = new DateTime($maklon_project->project_approve);
                                            $datetime12 = new DateTime($kontrak_kerjasama->file_upload);
                                            $interval = $datetime11->diff($datetime12);
                                            $woweekends = 0;
                                            for($i=0; $i<=$interval->d; $i++){
                                                $datetime11->modify('+1 day');
                                                $weekday = $datetime12->format('w');

                                                if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for

                                                $woweekends++;
                                                }
                                                }
                                                @endphp
                                                @else

                                                @endif

                                                <td>{{$interval->d.' Hari '. $interval->h .' Jam ' . $interval->i. ' Menit'}}
                                                </td>
                                                <td></td>
                                                <td><a href="/project/{{ $project }}/{{ $maklon_sementara}}/kontrak"
                                                        type="button" class="btn btn-info"><i
                                                            class="lnr lnr-rocket"></i></a></td>
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
