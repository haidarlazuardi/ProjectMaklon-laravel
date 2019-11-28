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

        input:checked + .slider {
          background-color: #2196F3;
        }

        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
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
            width:100px;
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
                <div class="panel-heading">
                    <h2>PROJECT FREEZE</h2>

                    <div class="card card-body" style="float:left">
                            (PKP di hold oleh PKP online)
                        </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr>
                                    <th>PROJECT
                                        </th>
                                        <th>NAMA MAKLON
                                        </th>
                                        <th>UNFREEZE
                                        </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_project as $project)
                                <tr>
                                    <td>{{ $project->nama_project }}</td>
                                    <td>kontak</td>
                                    <td>Hold {{ $project->status_project }}</td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox" checked="true" onchange="window.location.href='/unholdproject/{{ $project->id }}'">
                                            <span class="slider round"></span>
                                        </label>
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
  </div>
@stop
