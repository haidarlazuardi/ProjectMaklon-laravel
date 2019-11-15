@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="panel">
                <div class="panel-heading">
                    <h2>PROJECT REJECTED</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr>
                                    <th>PROJECT
                                        </th>
                                        <th>KATEGORI
                                        </th>
                                        <th>MAKLON
                                        </th>
                                        <th>URGENSI
                                        </th>
                                        <th>OPSI MAKLON
                                        </th>
                                        <th>AKSI
                                        </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($maklon_project as $mp)
                            @if ($mp->status_approval == 1)
                            <tr>
                                <td>{{$mp->project->nama_project}}</td>
                                {{-- <td>{{ $mp->maklon->nama_maklon }}</td> --}}
                                <TD></TD>
                                <td></td>
                                <td>{{$mp->keterangan}}</td>
                                <TD></TD>
                            </tr>
                            @endif
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
