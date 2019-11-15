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
            <form class="navbar-form navbar-left">
              <div class="input-group">
                <input type="text">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
              </div>
            </form>
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
                  @endif

                  @if(auth()->user()->role == 'Admin')
                  <li><a href="/trial" class=""><i class="fa fa-paper-plane-o"></i> <span>Trial</span></a></li>
                  @endif

                  @if(auth()->user()->role == 'Admin')
                  <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                      <ul class="nav">
                        <li><a href="/dokumen" class="">Approval Dokumen</a></li>
                      </ul>
                      <ul class="nav">
                        <li><a href="/harga" class="">Harga & Biaya Transportasi</a></li>
                      </ul>
                      <ul class="nav">
                        <li><a href="/harga" class="">Approval Margin</a></li>
                      </ul>
                      <ul class="nav">
                        <li><a href="/review" class="">Review CPM</a></li>
                      </ul>
                      <ul class="nav">
                        <li><a href="/halal" class="">Halal & Food Safety</a></li>
                      </ul>
                      <ul class="nav">
                        <li><a href="/kontak" class="">Kontak Kerja Sama</a></li>
                      </ul>

                    </div>
                  </li>
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
              @if(auth()->user()->role == 'Admin')
              <li>
                <a href="/brand" class=""><i class="fa fa-paper-plane-o"></i> <span>Brand</span></a>
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
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">PKP<br/>
                                        <small>Step 1 description</small>
                            </span>
                          </a>
                          </li>

                          <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">Maklon<br />
                                              <small>Step 1 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">Releted<br />
                                              <small>Step 1 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">Legalitas<br />
                                              <small>Step 1 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">MOU<br/>
                                              <small>Step 2 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">Trial<br />
                                <small>Step 3 description</small>
                            </span>
                          </a>
                        </li>

                        <li>
                          <a href="#step-7">
                            <span class="step_no">7</span>
                            <span class="step_descr">Data pendukung<br />
                                  <small>Step 4 description</small>
                            </span>
                          </a>
                        </li>
                      </ul>

                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                            <table class="table">
                                <tbody>
                                  {{-- @foreach ($project as $p) --}}


                                  <br>
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
                                    <td id="montd-val">{{@$project1->gramasi}}</td>
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
                                      {{-- <tr>
                                          <td>Timeline Launch :</td>
                                          <td id="year-val">{{@$project1->timeline}}</td>
                                        </tr> --}}
                                  {{-- @endforeach --}}
                                </tbody>
                              </table>
                        </form>

                      </div>
                      <div id="step-2">
                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                          <select class="form-control" id="maklon">
                              <option selected disabled>Nama Maklon</option>
                              @foreach($data_maklon as $maklon)
                                <option class="option" data-id="{{$maklon->id}}" data-maklon="{{$maklon->nama_maklon}}" data-pic="{{$maklon->nama_pic}}"data-alamat="{{$maklon->alamat}}"data-kontak="{{$maklon->kontak}}" data-email="{{$maklon->email}}" data-fasilitas="{{ $maklon->fasilitas_produksi }}" data-skala="{{$maklon->skala_kategori}}" data-hukum="{{$maklon->berbadan_hukum}}">{{$maklon->nama_maklon}}</option>
                              @endforeach
                            </select>
                            <br>
                            <table class="table">
                                <tbody>
                                  <input type="hidden" name="idMaklon" value="" id="idMaklon">
                                  <tr>
                                    <td>Nama Maklon :</td>
                                  <td id="nameMaklon"></td>
                                  </tr>
                                  <tr>
                                    <td>Nama PIC :</td>
                                  <td id="namePic"></td>
                                  </tr>
                                  <tr>
                                    <td>Alamat :</td>
                                  <td id="alamat"></td>
                                  </tr>
                                  <tr>
                                    <td>Kontak :</td>
                                    <td id="kontak"></td>
                                  </tr>
                                  <tr>
                                    <td>Email :</td>
                                    <td id="email"></td>
                                  </tr>
                                  <tr>
                                    <td>Fasilitas Produksi :</td>
                                    <td id="fasilitasProduksi"></td>
                                  </tr>
                                  <tr>
                                    <td>Skala Kategori :</td>
                                    <td id="skalaKategori"></td>
                                  </tr>
                                  <tr>
                                      <td>Berbadan Hukum :</td>
                                      <td id="berbadanHukum"></td>
                                  </tr>
                                </tbody>
                              </table>

                      </div>
                      <div id="step-3">
                        <div class="stepContainer" style="height: 281px;"><div id="step-1" class="content" style="display: block;">
                          <form class="form-horizontal form-label-left" action="/project/info/create" method="post" enctype="multipart/form-data">

                                {{csrf_field()}}
                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                              <input type="hidden" name="maklon_id" value="" id="maklonId">
                          <input type="text" name="project_id" value="{{ @$project1->id }}">
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CPM <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="cpm" type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penawaran <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input name="penawaran" type="file" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Konsep Kerjasama</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {{-- <select name="konsep_kerjamsa" id="" class="form-control col-md-7 col-xs-12">
                                  <option selected disabled>-- Konsep Kerjasama --</option>
                                  <option value="Produksi">Produksi</option>
                                  <option value="Jual Beli">Jual Beli</option>
                                </select> --}}
                                {{-- <input id="middle-name"  type="text" name="middle-name"> --}}
                                <textarea class="form-control col-md-7 col-xs-12" name="konsep_kerjasama" cols="30" rows="4"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Alur Proses</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea class="form-control col-md-7 col-xs-12" name="alur_proses" cols="30" rows="4"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">PPT Penjajakan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" name="ppt_penjajakan" class="date-picker form-control col-md-7 col-xs-12" required="required" type="file">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                      </div>
                      </div>

                      <div id="step-4" class="content" style="display: none;">
                          <form class="form-horizontal form-label-left" action="/project/info/legalitas" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                          <input type="hidden" name="user_id" value="auth::user()->id">
                          <input type="hidden" name="user_id" value="auth::user()->id">
                          <input type="hidden" name="user_id" value="auth::user()->id">
                          <br>
                        <div class="form-group">
                            <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
                            <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
                            <input name="file" type="file" id="first-name" required="required" class="form-control">
                            </div>
                          <div class="col-md-5 col-sm-6 col-xs-12">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                        <br>
                        <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Dokumen Legalitas</h2>
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
                                      <th>File</th>
                                      <th>Created</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($legal as $l)
                                    <tr>
                                    <th>{{$l->file}}</th>
                                        <td>{{ \Carbon\Carbon::parse($l->created_at)->formatLocalized("%D") }}</td>
                                        <td>
                                          <a href="#"><button class="btn btn-primary">Download</button></a>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>

                              </div>
                            </div>
                          </div>
                        </div>

                      <div id="step-5">
                        <form class="form-horizontal form-label-left" action="/project/info/mou" method="post" enctype="multipart/form-data">

                          {{csrf_field()}}
                        {{-- <input type="hidden" name="user_id" value="auth::user()->id">
                        <input type="hidden" name="user_id" value="auth::user()->id">
                        <input type="hidden" name="user_id" value="auth::user()->id"> --}}
                        <br>
                      <div class="form-group">
                          <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
                          <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
                          <input name="file" type="file" id="first-name" required="required" class="form-control">
                          </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                      <br>
                      <div class="col-md-3 col-sm-4 col-xs-12 col-offset-2"></div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>MOU</h2>
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
                                    <th>File</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($mou as $m)
                                  <tr>
                                  <th>{{$m->file}}</th>
                                      <td>{{ \Carbon\Carbon::parse($m->created_at)->formatLocalized("%D") }}</td>
                                      <td>
                                        <a href="#"><button class="btn btn-primary">Download</button></a>
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>

                            </div>
                          </div>
                        </div>

                        </div>

                        <div id="step-6">
                          <div class="x_content">


                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Home</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
                                </li>

                              </ul>
                              <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                    booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                </div>
                              </div>
                            </div>

                          </div>
                          </div>

                          <div id="step-7">
                            <form class="form-horizontal form-label-left" action="/project/info/pendukung" method="post" enctype="multipart/form-data">

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CAS<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" name="cas" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sertifikat Halal<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="file" id="last-name" name="sertifikat" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Kontrak Kerjasama</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="middle-name" class="form-control col-md-7 col-xs-12" type="file" name="kontrak_kerjasama">
                                </div>
                              </div>
                              <div class="form-group">
                                <button class="btn btn-primary">Save</button>
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
	<!-- jQuery -->
  <script src="{{asset('admin/assets/vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  {{-- <script src="{{asset('admin/assets/vendors/fastclick/lib/fastclick.js')}}"></script> --}}
  <!-- NProgress -->
  {{-- <script src="{{asset('admin/assets/vendors/nprogress/nprogress.js')}}"></script> --}}
  <!-- jQuery Smart Wizard -->
  <script src="{{asset('admin/assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
  <!-- Custom Theme Scripts -->
<script src="{{asset('admin/assets/build/js/custom.min.js')}}"></script>

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
