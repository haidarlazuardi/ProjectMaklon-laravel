{{-- <h3 class="panel-title">Create Data Maklon</h3> --}}
</div>
<div class="panel-body">
<form action="/createmaklon" method="post">
            {{csrf_field()}}

            <input type="hidden" name="project_id" value="{{ $project_id }}">

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Maklon</label>
                <input name="nama_maklon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama PIC</label>
                <input name="nama_pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama PIC">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Status Maklon</label>
                <select name="status" class="form-control" id="exampleFormControlSelect1">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="new">New</option>
                </select>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Contact</label>
              <input name="kontak"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Fasilitas Produksi</label>
          <input name="fasilitas_produksi"  type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fasilitas Produksi">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori</label>
            <select name="kategori" class="form-control" id="exampleFormControlSelect1">
            <option value="makanan">makanan</option>
            <option value="minuman">minuman</option>
            <option value="makan&minuman">makanan & minuman</option>
            </select>
        </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Skala Perusahaan</label>
                <select name="skala_kategori" class="form-control" id="exampleFormControlSelect1">
                <option value="Perusahaan">Perusahaan</option>
                <option value="UKM">UKM</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Berbadan Hukum</label>
                <select name="berbadan_hukum" class="form-control" id="exampleFormControlSelect1">
                <option value="CV">CV</option>
                <option value="PT">PT</option>
                <option value="Perorangan">Perorangan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">website</label>
                <input name="website" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
              </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Product/Brand exist </label>
            <input name="product_exist" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
          </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product form</label>
                <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
              </div>
          </div>
          <div class="modal-footer">
              <a>
                    {{-- href="/project/{{ $project_id->id }}/{{ $maklon_id->id }}/releted --}}
                  <button type="submit" class="btn btn-primary">Submit</button>
              </a>
            </form>
</div>
</div>
