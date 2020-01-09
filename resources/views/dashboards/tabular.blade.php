@extends('layout.master')

@section('content')
<style>
</style>
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="well" style="overflow: auto" >
                <h1>Detail PKP Maklon</h1>
              </div>
@foreach ($maklons as $mp)

<ul>
    <li>
       <h4>Nama Project: {{$mp->project->nama_project}}</h4>
    </li>
    <li>
        <h4>Brand : {{$mp->project->brand}}</h4>
    </li>
    <li>
    <h4>Estimated  :{{$mp->project->estimated}}</h4>
    </li>
    <li>
        <h4>Author : {{$mp->project->perevisi}}</h4>
    </li>

</ul>
@endforeach

              <table class="table table-striped jambo_table bulk_action" width="100%" id="datatables">

                <thead>
          <th>NO</th>
         <th>ID PKP</th>
       <th>ID PROJECT</th>
       <th>NAMA MAKLON</th>
       <th>CPM</th>
       <th>KONSEP KERJASAMA</th>
       <th>ALUR PROSES</th>
       <th>PPT PENJAJAKAN</th>
       <th>PENAWARAN</th>
       <th>STATUS DOKUMEN</th>
       <th>STATUS MOU</th>
       <th>STATUS TRIAL</th>
       <th>STATUS FOOD SAFE</th>
       <th>STATUS APPROVAL</th>
       <th>STATUS KONTRAK</th>
       <th>ACTION</th>


    </thead>
    <tbody>

        @foreach ($maklins as $mp)
    <tr>

    <td>{{$loop->iteration}}</td>
        <td>{{$mp->id}}</td>
        <td>{{$mp->project_id}}</td>

    <td>{{$mp->nama_maklon}}</td>
        <td> <a class="btn btn-success" href="{{URL::asset('../images/'.@$mp->cpm)}}"
            download="{{$mp->cpm}}"><i class="fa fa-download"></i>
            {{$mp->cpm}}</a></td>

        <td>{{$mp->konsep_kerjasama}}</td>
         <td><a class="btn btn-success" href="{{URL::asset('../images/'.@$mp->alur_proses)}}"
            download="{{$mp->alur_proses}}"><i class="fa fa-download"></i>
            {{$mp->alur_proses}}</a></td>
            <td><a class="btn btn-success" href="{{URL::asset('../images/'.@$mp->ppt_penjajakan)}}"
                download="{{$mp->ppt_penjajakan}}"><i class="fa fa-download"></i>
                {{$mp->ppt_penjajakan}}</a></td>

                <td>@if ($mp->status_harga == 2)
                    done
                @else
                    On Progress
                @endif</td>

        <td>@if ($mp->status_dokumen == 2)
            done
        @else
            On Progress
        @endif</td>
        <td>@if ($mp->status_mou == 2)
            done
        @else
            On Progress
        @endif</td>

        <TD>@if ($mp->status_dokumen == 2)
            done
        @else
            On Progress
        @endif</td></TD>
        <td>@if ($mp->status_trial == 2)
            done
        @else
            On Progress
        @endif</td></td>
        <TD>@if ($mp->status_food == 2)
            done
        @else
            On Progress
        @endif</td></TD>
        <td>@if ($mp->status_kontrak == 2)
            done
        @else
            On Progress
        @endif</td></td>
        <TD>
        {{-- <a class="tooltips" href="/reset/{{$mp->project_id}}">
                    <div class="btn btn-danger">
                        <i class="lnr lnr-trash">
                        </i> --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                    <form class="form" action="/reset/{{$mp->project_id}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" name="message" id="message-text"></textarea>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>
                    {{-- <span>reset
                        </span> --}}
                    {{-- </div> --}}
                {{-- </a> --}}

        </TD>
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
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );\
} );</script>
    @stop
