        @extends('layouts.layoutframe',['maklons'=>$maklons ])

        @section('content')
        {{-- Content --}}
        @if($maklon_project->isEmpty())

        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="lnr lnr-plus-circle"></i></button>

        <table class="table table-striped jambo_table bulk_action text-center">
            <thead>
                <tr class="headings">
                    <th class="column-title" style="display: table-cell;">Konsep Kerjasama </th>
                    <th class="column-title" style="display: table-cell;">Alur Proses </th>
                    <th class="column-title" style="display: table-cell;">PPT Penjajakan </th>
                    <th class="column-title" style="display: table-cell;">CPM </th>


                </tr>
            </thead>
            <tbody>

                <tr>
                    <td colspan="5">Tidak Ditemukan Data</td>
                </tr>

            </tbody>
        </table>
        <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">


            <a href="/project/{{$project}}/{{$maklon_sementara}}/penawaran">

                <button type="button" class="btn btn-success">Next</button>
            </a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal form-label-left" action="/project/info/create" method="post"
                            enctype="multipart/form-data">
                            <div id="step-3">
                                {{-- @foreach(session()->get('maklon') as $m) --}}
                                <div>
                                    <div id="step-1" class="content">
                                        {{-- <h2>{{ $m }}</h2> --}}

                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">


                                        <input type="hidden" name="maklon_id" value="{{ $maklon }}">

                                        <input type="hidden" name="project_id" value="{{ $project }}">
                                    </div>

                                    <div class="form-group row">
                                        <label for="middle-name" class="control-label col-md-4">Konsep
                                            Kerjasama</label>
                                        <div class="col-md-4">
                                            <select name="konsep_kerjasama" id="konsep_kerjasama"
                                                class="form-control col-md-7 col-xs-12">
                                                <option>-- Konsep Kerjasama --</option>
                                                <option value="Produksi">Produksi</option>
                                                <option value="Jual Beli">Jual Beli</option>
                                            </select>
                                        </div>
                                        {{-- <input id="middle-name"  type="text" name="middle-name"> --}}
                                        {{-- <textarea class="form-control col-md-7 col-xs-12" name="konsep_kerjasama" cols="30" rows="4"></textarea> --}}
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-4">Alur Proses</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="alur_proses" cols="30"
                                                rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">CPM<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input name="cpm" type="file" id="first-name" required="required"
                                                class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">PPT Penjajakan <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="ppt_penjajakan"
                                                class="form-control col-md-7 col-xs-12" required="required" type="file">
                                        </div>
                                    </div>

                                </div>

                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
        </div>

        @else
<<<<<<< HEAD
        <button class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
=======
        <button class="btn btn-primary" disabled data-toggle="modal" data-target="#exampleModal">
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3
            <i class="lnr lnr-plus-circle"></i></button>

        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th class="column-title" style="display: table-cell;">Konsep Kerjasama </th>
                    <th class="column-title" style="display: table-cell;">Alur Proses </th>
                    <th class="column-title" style="display: table-cell;">PPT Penjajakan </th>
                    <th class="column-title" style="display: table-cell;">CPM</th>
                    <th class="column-title" style="display: table-cell;">AKSI</th>

                </tr>
            </thead>
            <tbody>
                @foreach($maklon_project as $fi)

                <tr>
                    <td>{{$fi->konsep_kerjasama}} </td>
                    <td>{{$fi->alur_proses}}</td>
                    <td><a class="btn btn-success" href="{{URL::asset('../images/'.@$fi->ppt_penjajakan)}}"
                            download="{{$fi->ppt_penjajakan}}"><i class="fa fa-download"></i>
                            {{$fi->ppt_penjajakan}}</a></td>

                    <td><a class="btn btn-success" href="{{URL::asset('../images/'.@$fi->cpm)}}"
                            download="{{$fi->cpm}}"><i class="fa fa-download"></i> {{$fi->cpm}}</td>
                    <td>
                        <a class="tooltips" href="#">
                            <div class="btn btn-warning" data-toggle="modal" data-target="#exampleModall">
                                <i class="lnr lnr-pencil">
                                </i>
                            </div>
                            <span>
                            </span>
                        </a>
                        <a class="tooltips" href="#">
                            <div class="btn btn-danger">
                                <i class="lnr lnr-trash">
                                </i>
                            </div>
                            <span>
                            </span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <br>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">

                {{-- <a href="/project/{{$p->id}}/maklon">
                <button type="button" class="btn btn-primary">Previous</button>
                </a> --}}
                <a href="{{route('notifyPenjajakan')}}" class="btn btn-primary">Notify</a>

                <a href="/project/{{$project}}/{{$maklon_sementara}}/penawaran">

                    <button type="button" class="btn btn-success">Next</button>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>
        <!-- End SmartWizard Content -->






        <!-- End Modal -->

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Data Project</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">

                      <form class="form-horizontal form-label-left" action="/project/info/create" method="post"
                          enctype="multipart/form-data">
                          <div id="step-3">
                              {{-- @foreach(session()->get('maklon') as $m) --}}
                              <div>
                                  <div id="step-1" class="content">
                                      {{-- <h2>{{ $m }}</h2> --}}

                                      {{csrf_field()}}
                                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">


                                      <input type="hidden" name="maklon_id" value="{{ $maklon }}">

                                      <input type="hidden" name="project_id" value="{{ $project }}">
                                  </div>

                                  <div class="form-group row">
                                      <label for="middle-name" class="control-label col-md-4">Konsep
                                          Kerjasama</label>
                                      <div class="col-md-4">
                                          <select name="konsep_kerjasama" id="konsep_kerjasama"
                                              class="form-control col-md-7 col-xs-12">
                                              <option>-- Konsep Kerjasama --</option>
                                              <opti on value="Produksi">Produksi</option>
                                              <option value="Jual Beli">Jual Beli</option>
                                            </select>
                                        </div>
                                        {{-- <input id="middle-name"  type="text" name="middle-name"> --}}
                                        {{-- <textarea class="form-control col-md-7 col-xs-12" name="konsep_kerjasama" cols="30" rows="4"></textarea> --}}
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-4">Alur Proses</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="alur_proses" cols="30"
                                              rows="4"></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="control-label col-md-4">CPM<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6">
                                          <input name="cpm" type="file" id="first-name" required="required"
                                              class="form-control col-md-7 col-xs-12">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="control-label col-md-4">PPT Penjajakan <span
                                              class="required">*</span>
                                      </label>
                                      <div class="col-md-6">
                                          <input id="birthday" name="ppt_penjajakan"
                                              class="form-control col-md-7 col-xs-12" required="required" type="file">
                                      </div>
                                  </div>

                              </div>

                          </div>

                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>


          </div>
      </div>
      </div>

        {{-- modal update --}}
        <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Data Penjajakan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal form-label-left"
                            action="/project/penjajakan/{{$maklon_project_id->id}}/update" method="post"
                            enctype="multipart/form-data">
                            <div id="step-3">
                                <div>
                                    <div id="step-1" class="content">

                                        {{csrf_field()}}
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">


                                        <input type="hidden" name="maklon_id" value="{{ $maklon }}">

                                        <input type="hidden" name="project_id" value="{{ $project }}">
                                    </div>

                                    <div class="form-group row">
                                        <label for="middle-name" class="control-label col-md-4">Konsep
                                            Kerjasama</label>
                                        <div class="col-md-4">
                                            <select name="konsep_kerjasama" id="konsep_kerjasama"
                                                class="form-control col-md-7 col-xs-12">
                                                <option>-- Konsep Kerjasama --</option>
                                                <option value="Produksi" @if($maklon_project_id->konsep_kerjasama ==
                                                    'Produksi') selected
                                                    @endif>Produksi</option>
                                                <option value="Jual Beli" @if($maklon_project_id->konsep_kerjasama ==
                                                    'jual beli') selected @endif>Jual
                                                    Beli</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">Alur Proses</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="alur_proses" cols="30" rows="4"
                                                value="{{ $maklon_project_id->alur_proses }}"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">CPM<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input name="cpm" type="file" id="first-name" required="required"
                                                class="form-control col-md-7 col-xs-12"
                                                value="{{ $maklon_project_id->cpm }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-4">PPT Penjajakan <span
                                                class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="birthday" name="ppt_penjajakan"
                                                class="form-control col-md-7 col-xs-12" required="required"
                                                value="{{ $maklon_project_id->ppt_penjajakan }}" type="file">
                                        </div>
                                    </div>

                                </div>

                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
        @endif


        {{-- End Content --}}

        <div class="clearfix"></div>
        </div>



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

        <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>

        </body>

        </html>
        @endsection
