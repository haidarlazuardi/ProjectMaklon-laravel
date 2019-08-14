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
  width: 0; height: 0;
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
            <div class="panel">
							<div class="panel-heading">
								<h1 class="">DATA PKP</h1>
                  <div class="right">
                    @if (auth()->user()->role == "Admin")    
                    <a href="project/create"><button type="button" class="btn"><i class="lnr lnr-plus-circle"></i></button></a>
                    @endif
                  </div>
							</div>
							<div class="panel-body">
                <div class="">
                    <table class="table table-striped jambo_table bulk_action" >
										<thead>
											<tr>
                        <th>NAMA PROJEK</th>
                        <th>KATEGORI</th>
                        <th>NAMA BRAND</th>            
                        <th>URGENSI</th>
                        <th>OPSI MAKLON</th>
                        <th>AKSI</th>

											</tr>
										</thead>
										<tbody>
                @foreach($data_project as $project)
                    
                <tr>
                  <input type="hidden" name="project_id" value="{{$project->id}}">
                    <td>{{ $project->nama_project }}</td>
                    <td>{{ $project->kategori_project }}</td>

                    {{-- @foreach ($data_brand as $brand)
                        @if ($project->brand_id == $brand->id) --}}
                          <td>{{$project->nama_brand}}</td>
                        {{-- @endif
                    @endforeach --}}

                    <td>{{$project->urgensi_project}}</td>

                    <td>
                      <?php $i=0 ?>
                      @foreach ($maklons as $item)
                      
                          @if($item->project_id == $project->id)
                            <?php $i++ ?>
                            
                          @endif
                      @endforeach
                    
                    <button type="button" class="btn btn-primary showMaklon" onclick="showMaklon({{ $project->id }})" data-toggle="modal" data-target=".bs-example-modal-lg">{{ $i }}</button>
                    </td>
                    @if(auth()->user()->role == 'Admin')
                    <td>
                        <a class="tooltips" href="/project/{{$project->id}}/info"><button class="btn btn-round btn-primary" ><i class="fa fa-paper-plane-o"></i>
                        </button><span>Follow Up </span></a>
                      <a class="tooltips" href="/project/{{$project->id}}/edit"><button class="btn btn-warning"><i class="lnr lnr-pencil"></i>
                      </button><span>Edit </span></a>
                      <a class="tooltips" href="/project/{{$project->id}}/delete" onclick="return confirm('Yakin Mau di Hapus')"><button class="btn btn-danger"><i class="lnr lnr-trash"></i>
                      </button><span>Hapus</span> </a>
                    </td>
                    @elseif(auth()->user()->role == 'PV')
                    <td>
                    <a href="/project/{{$project->id}}/detail"><button class="btn btn-round btn-primary"><i class="lnr lnr-eye"></i>
                    </button></a>
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

        

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <table class="table" id="tableMaklon">
                  <thead>
                    <tr>
                      <th>Maklon yang dipilih</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>

            </div>
          </div>
        </div>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body">
          
        
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>


  <script>
      
    
    function showMaklon(id) {
    
      $.ajax({
        url: 'show-maklon/' + id,
        method: 'GET',
        dataType: 'JSON',
        success: function (data) {
          $('#tableMaklon tbody').empty();
          var td = ""; 
          for (let i = 0; i < data[0].length; i++) {
            td +="<tr>";
              for (let a = 0; a < data[1].length; a++) {
              if (data[0][i].maklon_id == data[1][a].id) {
              td +="<td>" + data[1][a].nama_maklon + "</td>";
              }
            }
            
            
            
            td +="</tr>";
          }
          $('#tableMaklon tbody').append(td);
        }
      });
    }
  </script>


@stop