@extends('layouts.layoutframe',['maklons'=>$maklons ])
@section('content')

<div class="container">
    <div class="x_panel">
        <div class="x_content">
            <div class="x_panel">
            </div>

            @if($maklon_project_id->isEmpty())

            <a href="#">

                <input type="hidden" name="id" value="#">

                <button type="submit" disabled class="btn btn-primary"
                    style="margin-left:auto; margin-right:auto; display:block;">APPROVE</button>
            </a>

            <a href="#">
                <button type="button" disabled class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                    style="margin-left:auto; margin-right:auto; display:block; ">NOT APPROVE PROJECT
                </button>
            </a>


            @else

            @if(in_array(auth()->user()->role,['PV','Admin']))
            <a href="#">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#approveModal"
                    style="margin-left:auto; margin-right:auto; display:block;">APPROVE</button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                    style="margin-left:auto; margin-right:auto; display:block; ">NOT APPROVE PROJECT
                </button>
            </a>

        <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Approve Reason</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-horizontal form-label-left" action="/approveProject/{{ $maklon_project->id }}" method="post"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" name="keterangan" id="message-text"></textarea>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Not Approve Reason</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal form-label-left" action="/notapprove/{{ $maklon_project->id }}" method="post"
                    enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" name="keterangan" id="message-text"></textarea>
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



            @else
            <a href="/approveproject/{{ $maklon_project->id }}">

                <input type="hidden" name="id" value="{{$maklon_project->id}}">

                <button type="submit" disabled class="btn btn-primary"
                    style="margin-left:auto; margin-right:auto; display:block;">APPROVE</button>
            </a>

            <a href="#">
                <button type="button" disabled class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                    style="margin-left:auto; margin-right:auto; display:block; ">NOT APPROVE PROJECT
                </button>
            </a>


            @endif

            @endif
        </div>
    </div>
</div>
</div>
<a href="/project/{{$project}}/{{$maklon_sementara}}/trial">
    <button type="button" class="btn btn-success" style="margin-left:auto; display:block; float:right;">Next
    </button>
</a>
<a href="/project/{{$project}}/{{$maklon_sementara}}/mou">
    <button type="button" class="btn btn-primary" style="margin-left:auto; display:block; float:right;">Previous
    </button>
</a>

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
</body>

</html>
@endsection
