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

                                    <th>PENCARIAN MAKLON</th>
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
                                                @if($pkp->priority_project == "Normal" || $interval->d <= 60 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Normal" || $interval->d > 60 )
                                                over LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d <= 30 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d > 30 )
                                                Over LT
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/releted"
                                                    type="button" class="btn btn-info"><i
                                                        class="lnr lnr-rocket"></i></a>
                                            </td>
                                            @endforeach


                                        </tr>
                             @foreach ($maklons as $m)

                             <tr>
                                    <th>APPROVAL PENAWARAN</th>
                                    <td>PV</td>
                                    @if ($maklon_project)

                                    @if($maklon_project->status_harga == 2)
                                    <td>done</td>
                                    @else
                                    <td>on progress</td>
                                    @endif
                                    @php
                                    $datetime1 = new DateTime($m->penawaran_upload);
                                    $datetime2 = new DateTime($m->penawaan_approve);

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
                                                @elseif($pkp->priority_project == "Normal" || $interval->d > 30 )
                                                over LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d <= 15 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d >= 15 )
                                                Over LT
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/penawaran"
                                                    type="button" class="btn btn-info"><i
                                                        class="lnr lnr-rocket"></i></a>
                                            </td>
                                            @endforeach
                                </tr>


                                <tr>

                             @foreach ($maklons as $m)

                             <tr>
                                    <th>DOKUMEN LEGALITAS</th>
                                    <td>LEGAL</td>
                                    @if ($legalitas)

                                    @if($maklon_project->status_dokumen == 2)
                                    <td>done</td>
                                    @else
                                    <td>on progress</td>
                                    @endif
                                    @php
                                    $datetime1 = new DateTime($legalitas->created_at);
                                    $datetime2 = new DateTime($m->legal_approve);

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
                                                @elseif($pkp->priority_project == "Normal" || $interval->d > 30 )
                                                over LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d <= 15 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d >= 15 )
                                                Over LT
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/legalitas"
                                                    type="button" class="btn btn-info"><i
                                                        class="lnr lnr-rocket"></i></a>
                                            </td>
                                            @endforeach
                                        </tr>



                             @foreach ($maklons as $m)

                             <tr>
                                    <th>MOU</th>
                                    <td>Legal</td>
                                    @if ($mou)

                                    @if($mou->file_upload == true)
                                    <td>done</td>
                                    @else
                                    <td>on progress</td>
                                    @endif
                                    @php
                                    $datetime1 = new DateTime($mou->created_at);
                                    $datetime2 = new DateTime($m->created_at);

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
                                                @elseif($pkp->priority_project == "Normal" || $interval->d > 30 )
                                                over LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d <= 15 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d >= 15 )
                                                Over LT
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/mou"
                                                    type="button" class="btn btn-info"><i
                                                        class="lnr lnr-rocket"></i></a>
                                            </td>
                                            @endforeach
                                </tr>
                                @foreach ($maklons as $m)

                                <tr>
                                       <th>APPROVAL PROJECT</th>
                                       <td>PV</td>
                                       @if ($maklon_project)

                                       @if($maklon_project->status_approval == 2)
                                       <td>done</td>
                                       @else
                                       <td>on progress</td>
                                       @endif
                                       @php
                                       $datetime1 = new DateTime($m->penawaran_upload);
                                       $datetime2 = new DateTime($m->project_approve);

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
                                                    @elseif($pkp->priority_project == "Normal" || $interval->d > 30 )
                                                    over LT
                                                    @elseif($pkp->priority_project == "Urgen" || $interval->d <= 15 )
                                                    Under LT
                                                    @elseif($pkp->priority_project == "Urgen" || $interval->d >= 15 )
                                                    Over LT
                                                    @endif
                                               </td>
                                               <td>
                                                   <a href="/project/{{ $project }}/{{ $maklon_sementara}}/approval"
                                                       type="button" class="btn btn-info"><i
                                                           class="lnr lnr-rocket"></i></a>
                                               </td>
                                               @endforeach
                                               </tr>


                                @foreach ($maklons as $m)

                                <tr>
                                       <th>TRIAL</th>
                                       <td>RnD</td>
                                       @if ($trial)

                                       @if($maklon_project->status_trial == 2)
                                       <td>done</td>
                                       @else
                                       <td>on progress</td>
                                       @endif
                                       @php
                                       $datetime1 = new DateTime($trial->created_at);
                                       $datetime2 = new DateTime($m->trial_approve);

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
                                                   @if($pkp->priority_project == "Normal" || $interval->d <= 120 )
                                                   Under LT
                                                   @elseif($pkp->priority_project == "Normal" || $interval->d >= 120 )
                                                   over LT
                                                   @elseif($pkp->priority_project == "Urgen" || $interval->d <= 75 )
                                                   Under LT
                                                   @elseif($pkp->priority_project == "Urgen" || $interval->d >= 75 )
                                                   Over LT
                                                   @endif
                                               </td>
                                               <td>
                                                   <a href="/project/{{ $project }}/{{ $maklon_sementara}}/trial"
                                                       type="button" class="btn btn-info"><i
                                                           class="lnr lnr-rocket"></i></a>
                                               </td>
                                               @endforeach
                                </tr>

                             @foreach ($maklons as $m)

                             <tr>
                                    <th>FOOD SAFETY</th>
                                    <td>QA</td>
                                    @if ($foodsafe)

                                    @if($maklon_project->status_food == 2)
                                    <td>done</td>
                                    @else
                                    <td>on progress</td>
                                    @endif
                                    @php
                                    $datetime1 = new DateTime($foodsafe->food_approve);
                                    $datetime2 = new DateTime($foodsafe->created_at);

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
                                                @if($pkp->priority_project == "Normal" || $interval->d <= 120 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Normal" || $interval->d >= 120 )
                                                over LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d <= 75 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d >= 75 )
                                                Over LT
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/pendukung"
                                                    type="button" class="btn btn-info"><i
                                                        class="lnr lnr-rocket"></i></a>
                                            </td>
                                            @endforeach
                                            </TR>



                             @foreach ($maklons as $m)

                             <tr>
                                    <th>KONTRAK KERJASAMA</th>
                                    <td>PRO</td>
                                    @if ($kontrak_kerjasama)

                                    @if($maklon_project->status_kontrak == 2)
                                    <td>done</td>
                                    @else
                                    <td>on progress</td>
                                    @endif
                                    @php
                                    $datetime1 = new DateTime($m->project_approve);
                                    $datetime2 = new DateTime($kontrak_kerjasama->created_at);

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
                                                @if($pkp->priority_project == "Normal" || $interval->d <= 120 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Normal" || $interval->d >= 120 )
                                                over LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d <= 75 )
                                                Under LT
                                                @elseif($pkp->priority_project == "Urgen" || $interval->d >= 75 )
                                                Over LT
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/kontrak"
                                                    type="button" class="btn btn-info"><i
                                                        class="lnr lnr-rocket"></i></a>
                                            </td>
                                            @endforeach
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
