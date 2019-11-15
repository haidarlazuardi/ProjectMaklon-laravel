@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Approval Dokumen</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NAMA PROJECT</th>
                                <th>DOKUMEN LEGALITAS</th>
                                <th>CONTACT</th>
                                <th>STATUS</th>
                                <th>ACTION</th>                                                                                                                                                                                                                                     
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($maklon                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            as $item_maklon)
                            <tr>

                              @foreach ($project as $item)

                              @if ($item_maklon->project_id == $item->id)
                                    <td>{{$item->nama_project}}</td>
                                  @endif
                              @endforeach
                                <td></td>
                                <td></td>
                                <td>{{$item_maklon->dokumen_legalitas}}</td>
                                <td>{{$item_maklon->contact}}</td>
                                <td><a href="" class="btn btn-primary btn-sm"><i class="lnr lnr-magic-wand"></i></a></td>
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
@stop
