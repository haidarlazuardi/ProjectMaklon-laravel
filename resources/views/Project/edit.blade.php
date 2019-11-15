@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="panel">
			<div class="panel-heading">
			    <h3 class="panel-title">Data Project</h3>
			</div>
					<div class="panel-body">
                    <form action="/project/{{$project->id}}/update" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Project</label>
                        <input name="nama_project" type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Project" value="{{$project->nama_project}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Kategori</label>
                        <select name="kategori_project" class="form-control" id="exampleFormControlSelect1">
                        <option value="Makanan" @if($project->kategori_project == 'Makanan') selected @endif >Makanan</option>
                        <option value="Minuman" @if($project->kategori_project == 'Minuman') selected @endif >Minuman</option>
                        <option value="Specialty" @if($project->kategori_project == 'Specialty') selected @endif >Specialty</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Forecast</label>
                        <input name="forecast"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Forecast" value="{{ $project->forecast }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pricelist</label>
                        <input name="pricelist" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pricelist" value="{{ $project->pricelist }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Brand</label>
                        <input name="nama_brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Brand" value="{{ $project->nama_brand }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gramasi</label>
                        <input name="gramasi"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gramasi" value="{{ $project->gramasi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Konfigurasi Kemas</label>
                        <input name="konfigurasi_kemas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Konfigurasi Kemas" value="{{ $project->konfigurasi_kemas }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Umur Simpan</label>
                        <select name="umur_simpan" class="form-control" id="exampleFormControlSelect1">
                        <option value="1 Bulan">1 Bulan</option>
                        <option value="2 Bulan">2 Bulan</option>
                        <option value="3 Bulan">3 Bulan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Gambaran Proses</label>
                        <textarea name="gambaran_proses" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$project->gambaran_proses}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Urgensi Project</label>
                        <select name="urgensi_project" class="form-control" id="exampleFormControlSelect1">
                        <option value="Urgen">Urgen</option>
                        <option value="Normal">Normal</option>
                        <option value="Less Urgen">Less Urgen</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Timeline Lauch</label>
                        <input name="timeline" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Timeline Lauch" value="{{ $project->timeline }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop


