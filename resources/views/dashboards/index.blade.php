@extends('layout.master')
@section('content')
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
</style>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                  <div class="panel">
                      <div class="panel-heading">
                          <a role="button" class="btn btn-info" >
                              <span class="lnr lnr-hourglass">
                            </span>
                            <h3>{{$count}}
                </h3>
                </a>
            </div>
            <p>
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">

            <div class="panel-heading">
                <a role="button" class="btn btn-warning">
                    <span class="lnr lnr-hourglass">
                    </span>
                    <h3>{{$count}}
                    </h3>
                </a>
            </div>
            <p>
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">
                <a role="button" class="btn btn-danger">
                    <span class="lnr lnr-hourglass">
                    </span>
                    <h3>
                    </h3>
                </a>
            </div>
            <p>
            </p>
        </div>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h2>DASHBOARD</h2>
                    <table class="table table-striped jambo_table bulk_action" id="datatable">
                        <thead>
                            {{--
                  <th>No
                  </th> --}}
                            <th>Project
                            </th>
                            <th>Urgensi
                            </th>
                            <th>Maklon
                            </th>
                            {{-- <th>
                                Freeze
                            </th> --}}
                            <th>Drop</th>
                        </thead>
                        <tbody>

                            @foreach ($maklon_project as $p)
                            {{-- @if($p->status_project =='') --}}
                            <tr>
                                {{--
                    <td>{{ $loop->iteration }}
                                </td> --}}

                                <td><a href="/project/{{$p->project->id}}/detail">{{ $p->project->nama_project }}</a>
                                    <br>
                                </td>
                                <td>{{ $p->project->priority_project}}
                                </td>
                                <td>
                                    <a class="tooltips">
                                        <a class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                            <i class="lnr lnr-hourglass">
                                            </i>
                                        </a>
                                    </a>
                                </td>
                                {{-- <td>

                                    <label class="switch">
                                        <input type="checkbox"
                                            onchange="window.location.href='/holdproject/{{ $p->id }}'">
                                        <span class="slider round"></span>
                                    </label>
                                </td> --}}
                                <td>

                                    <label class="switch">
                                        <input type="checkbox"
                                            onchange="window.location.href='/dropproject/{{ $p->id }}'">
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            {{-- @endif --}}
                            @endforeach
                            <br>
                        </tbody>
                    </table>
                </div>


                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <table class="table table-striped jambo_table bulk_action" id="datatable">
                                    <thead>
                                        {{--
                                                  <th>No
                                                  </th> --}}
                                        <th>Nama Maklon
                                        </th>
                                        <th>status</th>
                                        <th>Action
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($maklon_project as $m)

                                        <tr>
                                            @if ($maklon_project)

                                            <td>{{$m->mamaklon->nama_maklon}}
                                            @else
                                            <td></td>
                                            @endif
                                                <br>
                                            </td>
                                          <td></td>
                                            <td>
                                                <a href="/dashboard/{{$m->project->id}}/{{$m->maklon_id}}/detail">
                                                    <button class="btn btn-primary">
                                                        <i class="lnr lnr-rocket">
                                                        </i>
                                                    </button>
                                                </a>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <br>

                                    </tbody>
                                </table>
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop
