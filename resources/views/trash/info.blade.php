<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Nutrifood - Sourcing Maklon Online </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/demo_style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard_vertical.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/images.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/images.png')}}">

	<!-- Bootstrap -->
  {{-- <link href="{{asset('admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
  <!-- Font Awesome -->
  <link href="{{asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('admin/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{asset('admin/assets/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
    {{-- Navbar --}}
      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="brand">
            <a href="index.html"><img src="{{asset('admin/assets/img/Logo.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
          </div>
          <div class="container-fluid">
            <div class="navbar-btn">
              <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            <div id="navbar-menu">
              <ul class="nav navbar-nav navbar-right">


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/download.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                    <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                  </ul>
                </li>
                <!-- <li>
                  <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>
        {{-- End Navbar --}}

        {{-- Sidebar --}}
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
              <nav>
                <ul class="nav">
                  <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

                  @if(in_array(auth()->user()->role,['Admin','PV']))
                  <li><a href="/project" class=""><i class="lnr lnr-rocket"></i> <span>Data PKP</span></a></li>
                  @endif

                  {{-- @if(in_array(auth()->user()->role,['Admin','PV']))
                  <li><a href="/project" class=""><i class="lnr lnr-rocket"></i> <span>Biaya Transportasi</span></a></li>
                  @endif

                  @if(in_array(auth()->user()->role,['Admin','PV']))
                  <li><a href="/project" class=""><i class="lnr lnr-rocket"></i> <span>Harga</span></a></li>
                  @endif --}}

                  @if(auth()->user()->role == 'Admin')
                  <li><a href="/maklon" class=""><i class ="lnr lnr-cart"></i> <span>Data Maklon</span></a></li>

                  <li>
                    <a href="/user" class=""><i class="lnr lnr-user"></i> <span>User</span></a>
                  </li>
                @endif

            @if(auth()->user()->role == 'Legal')
              <li>
                <a href="/dokumen" class=""><i class="lnr lnr-file-empty"></i> <span>Approval Dokumen</span></a>
              </li>
            @endif
            @if(auth()->user()->role == 'GP')
              <li>
                <a href="/harga" class=""><i class="fa fa-credit-card"></i> <span>Harga</span></a>
              </li>
            @endif

            @if(auth()->user()->role == 'QA')
              <li>
                <a href="/review" class=""><i class="lnr lnr-map"></i> <span>Review CPM</span></a>
              </li>
              <li>
                <a href="/halal" class=""><i class="lnr lnr-linearicons"></i> <span>Halal & Food Safety</span></a>
              </li>
            @endif
          </nav>
        </div>
      </div>
        {{-- End Sidebar --}}

        {{-- Content --}}
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Project Maklon<small>Sessions</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    {{-- <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p> --}}
                      <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                          <li>
                            @foreach ($project as $p)
                            <a href="/project/{{$p->id}}/info">
                            @endforeach

                            <span class="step_no" style="background :#0095ff !important">1</span>
                            <span class="step_descr">Data PKP<br/>
                                        <small>Step 1 description</small>
                            </span>
                          </a>
                          </li>

                          <li>
                            @foreach($project as $p)
                          <a href="/project/{{$p->id}}/maklon">
                            @endforeach
                            <span class="step_no">2</span>
                            <span class="step_descr">Data Maklon<br />
                                              <small>Step 2 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          @foreach ($project as $p)
                            <a href="/project/{{$p->id}}/maklon" onclick="return confirm('Silahkan Pilih Maklon Terlebih Dahulu !')">
                          @endforeach
                            <span class="step_no">3</span>
                            <span class="step_descr">Data Tambahan<br />
                                              <small>Step 3 description</small>
                            </span>
                          </a>
                        </li>



                        <li>
                          <a href="/project/{{$p->id}}/maklon" onclick="return confirm('Silahkan Pilih Maklon Terlebih Dahulu !')">
                            <span class="step_no">4</span>
                            <span class="step_descr">Dokumen Legalitas<br />
                                              <small>Step 4 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="/project/{{$p->id}}/maklon" onclick="return confirm('Silahkan Pilih Maklon Terlebih Dahulu !')">
                            <span class="step_no">5</span>
                            <span class="step_descr">MOU & NDA<br/>
                                              <small>Step 5 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                            <a href="/project/{{$p->id}}/maklon" onclick="return confirm('Silahkan Pilih Maklon Terlebih Dahulu !')">
                            <span class="step_no">6</span>
                            <span class="step_descr">Trial<br />
                                <small>Step 6 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                            <a href="/project/{{$p->id}}/maklon" onclick="return confirm('Silahkan Pilih Maklon Terlebih Dahulu !')">
                            <span class="step_no">7</span>
                            <span class="step_descr">Data pendukung<br />
                                  <small>Step 7 description</small>
                            </span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                            <table class="table table-striped jambo_table bulk_action">
                                <tbody>
                                  {{-- @foreach ($project as $p) --}}


                                  <br>
                                  <thead>
                                  <tr>
                                    <th>Projek {{@$project1->nama_project}}</th>
                                    <th></th>
                                  </tr>
                                  </thead>
                                  <tr>
                                    <td>Nama Projek :</td>
                                  <td id="username-val">{{@$project1->nama_project}}</td>
                                  </tr>
                                  <tr>
                                    <td>Kategori :</td>
                                  <td id="email-val">{{@$project1->kategori_project}}</td>
                                  </tr>
                                  <tr>
                                    <td>Forecast :</td>
                                  <td id="card-type-val">{{@$project1->forecast}}</td>
                                  </tr>
                                  <tr>
                                    <td>Pricelist :</td>
                                    <td id="card-number-val">{{@$project1->pricelist}}</td>
                                  </tr>
                                  <tr>
                                    <td>Nama Brand :</td>
                                    <td id="cvc-val">{{@$project1->nama_brand}}</td>
                                  </tr>
                                  <tr>
                                    <td>Gramasi :</td>
                                    <td id="montd-val">{{@$project1->gramasi}} {{@$project1->satuan}} </td>
                                  </tr>
                                  <tr>
                                    <td>Konfigurasi Kemas :</td>
                                    <td id="year-val">{{@$project1->konfigurasi_kemas}}</td>
                                  </tr>
                                  <tr>
                                      <td>Umur Simpan :</td>
                                      <td id="year-val">{{@$project1->umur_simpan}}</td>
                                  </tr>
                                    <tr>
                                        <td>Gambaran Proses :</td>
                                        <td id="year-val">{{@$project1->gambaran_proses}}</td>
                                    </tr>
                                    <tr>
                                        <td>Urgensi Projek :</td>
                                        <td id="year-val">{{@$project1->urgensi_project}}</td>
                                      </tr>
                                      <tr>
                                          <td>Timeline Launch :</td>
                                          <td id="year-val"><a class="btn btn-success"  href="{{URL::asset('../images/'.@$project1->timeline)}}" download="{{$project1->timeline}}"><i class="fa fa-download"></i> {{@$project1->timeline}}</a></td>

                                        </td>
                                        </tr>
                                  {{-- @endforeach --}}
                                </tbody>
                              </table>
                              <br>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                  <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-9">
                                    <button type="button" class="btn btn-primary" disabled>Previous</button>

                                    @foreach($project as $p)
                                      <a href="/project/{{$p->id}}/maklon">
                                  @endforeach
                                     <button type="button" class="btn btn-success">Next</button>
                                      </a>
                                  </div>
                              </div>
                        </form>

                      </div>



                    </div>
                    <!-- End SmartWizard Content -->




                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>

        </div>
      </div>
    </div>
  </div>

        {{-- End Content --}}

        <div class="clearfix"></div>
		{{-- <footer>
			<div class="container-fluid" style="color:transparent">
				<p class="copyright">&copy; 2019 <a href="https://www.nutrifood.co.id" target="_blank">Nutrifood</a>. All Rights Reserved.</p>
			</div>
		</footer>--}}
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


        <form action="/maklon/createInPkp" method="post">
        {{csrf_field()}}
        {{-- <div class="form-group">
            <label for="exampleOptionProject">Nama Project</label>
            <select name="project_id" class="form-control" id="exampleOptionProject">
              @foreach($data_project as $project)
                  <option value="{{$project->id}}">{{$project->nama_project}}</option>
                @endforeach
            </select>
        </div>   --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Maklon</label>
            <input name="nama_maklon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Maklon">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama PIC</label>
            <input name="nama_pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama PIC">
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
      <textarea name="fasilitas_produksi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Skala Kategori</label>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	{{-- <script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script> --}}
	{{-- <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> --}}
	{{-- <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script> --}}
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>



    {{-- wizard --}}
	<!-- jQuery(INI) -->
  {{-- <script src="{{asset('admin/assets/vendors/jquery/dist/jquery.min.js')}}"></script> --}}
  <!-- Bootstrap(INI) -->
  {{-- <script src="{{asset('admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}

  <!-- FastClick -->
  {{-- <script src="{{asset('admin/assets/vendors/fastclick/lib/fastclick.js')}}"></script> --}}
  <!-- NProgress -->
  {{-- <script src="{{asset('admin/assets/vendors/nprogress/nprogress.js')}}"></script> --}}
  <!-- jQuery Smart Wizard(INI) -->
  {{-- <script src="{{asset('admin/assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script> --}}


  <!-- Custom Theme Scripts(INI) -->
{{-- <script src="{{asset('admin/assets/build/js/custom.min.js')}}"></script> --}}

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

  // && $('#alamat').text(alamat) && $('#kontak').text(kontak);
  //   $('#email').text(email);
  //   $('#fasilitasProduksi').text(fasilitasProduksi);
  //   $('#skalaKategori').text(skalaKategori);
  //   $('#berbadanHukum').text(berbadanHukum);)


  </script>
</body>
</html>
