@extends('layouts.layoutframe',['maklons'=>$maklons ])
@section('content')
<div id="step-7">
    <div class="x_content">
        {{-- @if($cas->isEmpty())
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      <i class="lnr lnr-plus-circle">
      </i> Create
    </button>
    <table class="table table-striped jambo_table bulk_action text-center">
      <thead>
        <tr>
          <th>CAS
          </th>
          <th>RATING
          </th>
          <th>STATUS
          </th>
          <th>More Action
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">Tidak ada data
          </td>
          <td colspan="3">
            {{-- <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#exampleMods">
              <i class="lnr lnr-plus-circle">
              </i>
            </button>
            <button type="button" class="btn btn-info"data-toggle="modal" data-target="#exampleModx">
              <i class="lnr lnr-pencil">
              </i> --}}
        {{-- </button> --}}
        {{-- </td>
        </tr>
      </tbody>
    </table> --}}
        {{-- @else --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="lnr lnr-plus-circle">
            </i> Create
        </button>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>CAS
                    </th>
                    <th>RATING
                    </th>
                    <th>STATUS
                    </th>
                    {{--
          <th>Kontrak Kerjasama
          </th> --}}
                    <th>More Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foodsafety as $fs)
                <tr>
                    <td>
                        <a class="btn btn-success" href="{{URL::asset('../images/'.@$fs->file)}}"
                            download="{{$fs->file}}">
                            <i class="fa fa-download">
                            </i> {{$fs->file}}
                        </a>
                    </td>
                    <td>
                        {{$fs->kategori}}
                    </td>
                    <td>
                        {{$fs->status}}
                    </td>
                    <td>
                        {{-- <a class="tooltips" href="#">
              <button class="btn btn-info">
                <i class="lnr lnr-eye">
                </i>
              </button>
            </a>
            <a class="tooltips">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa" >
                <i class="lnr lnr-plus-circle">
                </i> Create
              </button>
            </a> --}}
                        <a class="tooltips" href="#" onclick="return confirm('Yakin Mau di Hapus')">
                            <button class="btn btn-danger">
                                <i class="lnr lnr-trash">
                                </i>
                            </button>
                        </a>

                        @if(in_array(auth()->user()->role,['QA','Admin']))
             <a href="/approvefoodsafe/{{ $maklon_project->id }}">
                <input type="hidden" name="id" value="{{$maklon_project->id}}">
                    <button type="button" class="btn btn-primary">Approve foodsafety
                </button>
                @else
                 <a href="/approvefoodsafe/{{ $maklon_project->id }}">
                <input type="hidden" name="id" value="{{$maklon_project->id}}">
                    <button type="button" disabled class="btn btn-primary">Approve foodsafety
                </button>
            @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- @endif --}}
        <br>
        <div class="ln_solid">
        </div>
        <div class="form-group">


            <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">
                <a href="/project/{{$project}}/{{$maklon_sementara}}/trial">
                    <button type="button" class="btn btn-primary">Previous
                    </button>
                </a>
                <a href="/project/{{$project}}/{{$maklon_sementara}}/kontrak">
                    <button type="button" class="btn btn-success">Next
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End SmartWizard Content -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{{-- End Content --}}
<div class="clearfix">
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Project
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-label-left" action="/project/info/foodsafety" method="post"
                    enctype="multipart/form-data">
                    {{csrf_field()}}

                    <input type="hidden" name="project_id" value="{{$project}}">
                    <input type="hidden" name="maklon_id" value="{{$maklon_sementara}}">
                    <div class="form-group">
                        <label for="first-name">CAS
                            <span class="required">
                            </span>
                        </label>
                        <input type="file" name="file" id="first-name" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="">Pilih rating
                        </label>
                        <select name="kategori" class="form-control form-control " id="exampleFormControlSelect1">
                            <option value="A">A
                            </option>
                            <option value="B">B
                            </option>
                            <option value="C">C
                            </option>
                            <option value="D">D
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2" class="">Status
                        </label>
                        <select name="status" class="form-control form-control " id="exampleFormControlSelect2">
                            <option value="good">GOOD
                            </option>
                            <option value="not good">NOT GOOD
                            </option>
                        </select>
                    </div>
                    {{--
          </div>
        <div class="form-group">
          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kontrak Kerjasama
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file" name="kontrak_kerjasama">
          </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                </button>
                <button type="submit" class="btn btn-primary">Submit
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}">
    </script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}">
    </script>
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
        $('#maklon').change(function () {
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
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}">
    </script>
    <script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}">
    </script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}">
    </script>
    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}">
    </script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}">
    </script>
    </body>

    </html>
    @endsection
    ​
