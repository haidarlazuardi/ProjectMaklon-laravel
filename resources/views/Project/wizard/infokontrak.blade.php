@extends('layouts.layoutframe',['maklons'=>$maklons ])
@section('content')


<div id="step-5">
    <form class="form-horizontal form-label-left" action="/project/info/kontrakkerjasama/{{ $maklon_id }}/{{ $project_id }}" method="post" enctype="multipart/form-data">

      {{csrf_field()}}
    {{-- <input type="hidden" name="user_id" value="auth::user()->id">
    <input type="hidden" name="user_id" value="auth::user()->id">
    <input type="hidden" name="user_id" value="auth::user()->id"> --}}
    <br>
  <div class="form-group">
      <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
      <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
      <input name="kontrak_kerjasama" type="file" id="first-name" required="required" class="form-control">
      </div>
    <div class="col-md-5 col-sm-6 col-xs-12">

     @if(in_array(auth()->user()->role,['PRO','admin']))
        <button type="submit" class="btn btn-primary">Submit</button>
    @else
        <button type="submit" class="btn btn-primary">Submit</button>
@endif
    </div>
  </div>
</form>
  <br>
  <div class="row">
  <div class="col-md-2 col-sm-4 col-xs-12 col-offset-2"></div>
  <div class="col-md-8 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>KONTRAK KERJASAMA</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <table class="table table-striped">
            <thead>
              <tr>
                <th>file</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            @foreach ($kontrak as $m)
            <tbody>
              <tr>
              <td><a class="btn btn-success"  href="{{URL::asset('../images/'.@$m->file)}}" download="{{$m->file}}"><i class="fa fa-download"></i> {{$m->file}} </a></td>
                  <td>{{ \Carbon\Carbon::parse($m->created_at)->formatLocalized("%D") }}</td>
                  <td>
                    <a href="" onclick="return confirm('Apakah anda yakin Delete ?')"><button class="btn btn-danger">Delete</button></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</form>
<a href="/project/{{$project}}/{{$maklon_sementara}}/approval">
<button type="button" class="btn btn-primary">Previous</button>
</a>


            <div style="float:right">
                @if($maklon_project_id->isEmpty())
                <a href="#">
                    <input type="hidden" name="id" value="#">
                        <button type="button" disabled class="btn btn-primary .float-right ">PROJECT DONE
                    </button>
                    @else
                @if(in_array(auth()->user()->role,['PRO','Admin']))
             <a href="/projectdone/{{ $maklon_project->id }}">
                <input type="hidden" name="id" value="{{$maklon_project->id}}">
                    <button type="button"  class="btn btn-primary float-right">PROJECT DONE
                </button>
                @else
                 <a href="/projectdone/{{ $maklon_project->id }}">
                <input type="hidden" name="id" value="{{$maklon_project->id}}">
                    <button type="button" disabled class="btn btn-primary .float-right ">PROJECT DONE
                </button>
            @endif
            @endif
            </div>

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

      $('#maklon').change(function(){
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
