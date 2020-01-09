@extends('layout.master')
@section('content')
{{-- class tooltip --}}
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
{{-- end class tooltip --}}
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">

                        @if ($message = Session::get('info'))
                        <div class="alert alert-info alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong>{{ $message }}</strong>
                        </div>
                      @endif

                        <div class="x_title">
                            <h2>ON PROGRESS PROJECT
                            </h2>

                            <div class="panel_toolbox">

                                @if (auth()->user()->role == "Admin")
                                <a href="/project/create"><button type="button" class="btn btn-primary">Tambah
                                    Project</button></a>

                                    @endif
                                <a href="/api"><button type="submit" class="btn btn-success">Refresh PKP</button></a>
                                </div>

                                <div class="clearfix">
                                </div>

                <div class="card card-body" style="float:left">
                        (PKP masih dalam proses penjajakan calon maklon)
                        </div>

                        </div>
                        <div class="x_content">
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped jambo_table bulk_action" id="datatable">
                                <thead>
                                    <tr>
                                        <th>NAMA PROJECT
                                        </th>
                                        {{-- <th>KATEGORI PANGAN
                                        </th> --}}
                                        {{-- <th>
                                            FILTER MAKLON
                                        </th> --}}
                                        <th>NAMA BRAND
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
                                    {{-- @foreach ($maklon_project as $mp) --}}

                                    @foreach($data_project as $project)
                                    <tr>
                                        <input type="hidden" name="project_id" value="{{$project->id}}">
                                        <td>
                                            {{ $project->nama_project }}
                                        </td>
                                        {{-- <td></td> --}}
                                        {{-- <td>{{ $project->category }} --}}
                                        </td>
                                        {{-- @foreach ($data_brand as $brand)
                                            @if ($project->brand_id == $brand->id) --}}
                                            <td>{{$project->brand}}
                                                </td>
                                                {{-- @endif
                                                    @endforeach --}}
                                                    <td>@if ($project->priority_project == 2)
                                                        Urgen
                                                    @else
                                                        Normal
                                                    @endif

                                                        </td>
                                                        <td>
                                                            <?php $i=0 ?>
                                                            @foreach ($maklons as $item)
                                                            @if($item->project_id == $project->id)
                                            <?php $i++ ?>
                                            @endif
                                    @endforeach


                                            {{-- @endforeach --}}


                                            <button class="btn btn-primary " data-toggle="modal"
                                            data-target="#exampleModalCenter{{$project->id}}">
                                            <i class="lnr lnr-apartment">
                                            </i>
                                        </button>
                                    </div>
                                    <td>
                                        @if(in_array(auth()->user()->role,['Admin','PRO','RND']))

                                        <div class="modal fade" id="exampleModalCenter{{$project->id}}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Pilih Maklon</h5>
                    </button>
                </div>

                <div class="modal-body">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#maklon">
            Tambah Maklon
        </button>
                    <br>

                    <table class="table table-striped jambo_table bulk_action" id="myTable">
                        <div class="table-filter">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="filter-group">
                                        <span class="filter-icon"><i class="fa fa-filter"></i></span>
                                        <label>Filter</label>
                                            <select id="mylist" onchange="myFunction()" class="form-control">
                                                <option id="Makanan">Makanan</option>
                                                <option id="Minuman">Minuman</option>
                                                <option id="Makanan & Minuman">Makanan & minuman</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <thead> --}}
                        {{--
                  <th>No
                  </th> --}}
                        <th>Nama Maklon
                        </th>
                        <th>Kategori</th>
                        <th>status</th>
                        <th>Action
                        </th>
                        </thead>


                        <tbody>
                            @foreach($maklon_project as $m)

                            <tr>
                                <td>@if ($m->status_maklon == 1 )

                                           <p style="color:black;"> {{ $m->mamaklon->nama_maklon }} </p>
                                @elseif($m->status_maklon == 2)
                                <p style="color:blue;"> {{ $m->mamaklon->nama_maklon }} </p>
                                @else
                                {{$m->mamaklon->nama_maklon}}
                                @endif
                            <td>{{$m->mamaklon->kategori}}</td>
                            <td>{{$m->mamaklon->status}}</td>
                                <td>
                                    <a href="/project/{{ $project->id }}/{{ $m->maklon_id }}/releted">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
<a class="tooltips" href="/project/{{$project->id}}/detail"><button class="btn btn-round btn-primary"><i
                class="lnr lnr-eye"></i></button><span>Detail</span></a>

    <a class="tooltips" href="/project/{{$project->id}}/edit">
        <div class="btn btn-warning">
            <i class="lnr lnr-pencil">
            </i>
        </div>
        <span>Edit
        </span>
    </a>
    <a class="tooltips" href="/project/{{$project->id}}/delete" onclick="return confirm('Yakin Mau di Hapus')">
        <div class="btn btn-danger">
            <i class="lnr lnr-trash">
            </i>
        </div>
        <span>Hapus
        </span>
    </a>
    </td>
     <td>
    </td>
    @endif
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
</div>
</form>
<!-- Central Modal Small -->
<div class="modal fade" id="maklon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Create Data Maklon</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @if ($data_project->isEmpty())

          <div class="modal-content">
         @include('Project.wizard.createmaklon')
          @else
          <div class="modal-content">
                @include('Project.wizard.createmaklon', ['project_id' => $project->id])
          @endif
      </div>
    </div>
  </div>
</div>

<script>
        function myFunction() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("mylist");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          console.log(input);
          console.log(filter);
          console.log(table);
          console.log(tr);

          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>


{{--
<script type="text/javascript">
    function showMaklon(id) {
        $.ajax({
            url: 'show-maklon/' + id,
            method: 'GET',
            dataType: 'JSON',
            success: function (data) {
                $('#tableMaklon tbody').empty();
                var td = "";
                for (let i = 0; i < data[0].length; i++) {
                    td += "<tr>";
                    for (let a = 0; a < data[1].length; a++) {
                        if (data[0][i].maklon_id == data[1][a].id) {
                            td += "<td>" + data[1][a].nama_maklon + "</td>";
                        }
                    }
                    td += "</tr>";
                }
                $('#tableMaklon tbody').append(td);
            }
        });
    }
</script> --}}
@stop
