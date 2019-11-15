@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9 col-md-offset-1">
          <div class="panel">
			<div class="panel-heading">
			    <h2 class="">CREATE PROJECT</h2>
			</div>
					<div class="panel-body">
                            <form action="/project/store" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @foreach($data_project as $project)

                                  <input type="hidden" name="project_id" value="{{$project->id}}">

                                  @foreach ($maklon as $m)
                                  <input type="hidden" name="maklon_id" value="{{$m->id}}">
                                @endforeach

                                @endforeach
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Projek</label>
                                    <input name="nama_project" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Project">
                                </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Pilih Kategori</label>
                                  <select name="kategori_project" class="form-control" id="exampleFormControlSelect1">
                                  <option value="Makanan">Makanan</option>
                                  <option value="Minuman">Minuman</option>
                                  <option value="Specialty">Specialty</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Forecast</label>
                                  <input name="forecast"  type="text" class="form-control" id="rupiah" aria-describedby="emailHelp" placeholder="Forecast">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Pricelist</label>
                                  <input name="pricelist" type="text" class="form-control" id="rupiah2" aria-describedby="emailHelp" placeholder="pricelist">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Brand</label>
                                <input name="nama_brand" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Brand">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Gramasi</label>
                                      <input name="gramasi"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gramasi">
                                  </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Satuan</label>
                                  <select name="satuan" class="form-control" id="exampleFormControlSelect1">
                                  <option  selected disabled>-- Pilih satuan --</option>
                                  <option value="kg">kg</option>
                                  <option value="gram">gram</option>
                                  <option value="liter">liter</option>
                                  <option value="ml">ml</option>
                                  </select>
                              </div>
                            </div>
                            </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Konfigurasi Kemas</label>
                                  <input name="konfigurasi_kemas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12s x 1kg">
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Umur Simpan</label>
                                  <select name="umur_simpan" class="form-control" id="exampleFormControlSelect1">
                                  <option  selected disabled>-- Lama umur simpan --</option>
                                  <option value="1 Bulan">1 Bulan</option>
                                  <option value="2 Bulan">2 Bulan</option>
                                  <option value="3 Bulan">3 Bulan</option>
                                  <option value="4 Bulan">4 Bulan</option>
                                  <option value="5 Bulan">5 Bulan</option>
                                  <option value="6 Bulan">6 Bulan</option>
                                  <option value="7 Bulan">7 Bulan</option>
                                  <option value="8 Bulan">8 Bulan</option>
                                  <option value="9 Bulan">9 Bulan</option>
                                  <option value="10 Bulan">10 Bulan</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Gambaran Proses</label>
                                  <textarea name="gambaran_proses" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Urgensi Projek</label>
                                  <select name="urgensi_project" class="form-control" id="exampleFormControlSelect1">
                                  <option value="Urgen">Urgen</option>
                                  <option value="Normal">Normal</option>
                                  <option value="Less Urgen">Less Urgen</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Timeline</label>
                                  <input name="timeline" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Timeline Lauch">
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

  <script type="text/javascript">

		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
        var rupiah2 = document.getElementById('rupiah2');
		rupiah2.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah2.value = formatRupiah(this.value, 'Rp. ');
		});
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
  </script>



@stop


