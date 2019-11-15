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
                <a href="index.html"><img src="{{asset('admin/assets/img/Logo.png')}}" alt="Klorofil Logo"
                        class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i
                            class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                    src="{{asset('admin/assets/img/download.png')}}" class="img-circle" alt="Avatar">
                                <span>{{auth()->user()->name}}</span> <i
                                    class="icon-submenu lnr lnr-chevron-down"></i></a>
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
       {{-- Content --}}
        <div class="main">
                @include('layout.include._sidebar')

            <div class="main-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
@foreach ($maklons as $m)
<h3>PROJECT ACTIVE :{{$m->project->nama_project}}</h3>
<h3 >MAKLON ACTIVE  :{{$m->mamaklon->nama_maklon}}</h3>

@endforeach


                                {{-- @foreach ($maklons as $m)
                                {{$m->id}}

                                @endforeach --}}

                                {{-- @foreach ($maklon_project as $mp)

                                <div class="x_title">
                                    {{-- <h2>{{$mp->nama_project}}<small>{{$mp->nama_maklon}}</small></h2> --}}
                                    {{-- @endforeach

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">


                                    <!-- Smart Wizard -->
                                    {{-- <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p> --}}

                                    {{-- <li>
                                          @foreach ($project as $p)
                                            <a href="/project/{{$p->id}}/info">
                                    @endforeach
                                    <span class="step_no">1</span>
                                    <span class="step_descr">Data PKP<br />
                                        <small>Step 1 description</small>
                                    </span>
                                    </a>
                                    </li> --}}

                                    {{-- <li>
                                          @foreach ($project as $p)
                                          <a href="/project/{{$p->id}}/maklon">
                                    @endforeach
                                    <span class="step_no">2</span>
                                    <span class="step_descr">Data Maklon<br />
                                        <small>Step 2 description</small>
                                    </span>
                                    </a>
                                    </li> --}}
                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                        <ul class="wizard_steps">

                                            <li>
                                                <a href="/project/{{ $project }}/{{ $maklon_sementara}}/releted">
                                                    {{-- @foreach ($maklon_project->take(1) as $mp)
                                            @if ($mp->status_maklon  == 1)
                                                <span class="step_no" style="background: yellow;">1</span>
                                            @elseif($mp->status_maklon == 2)
                                                <span class="step_no" style="background: green;">1</span>
                                            @elseif($mp->status_maklon == 0 || $mp->status_maklon == null)
                                            @endif
                                            @endforeach --}}
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/releted') ? 'green' : '' }}">1</span>
                                                    <span class="step_descr">Data penjajakan<br />
                                                        <small>Step 1 description</small>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/penawaran">
                                                    {{-- @foreach ($maklon_project->take(1) as $mp)


                                            @if ($mp->status_maklon  == 1)
                                                <span class="step_no" style="background: yellow;">2</span>
                                            @elseif($mp->status_maklon == 2)
                                                <span class="step_no" style="background: green;">2</span>
                                            @elseif($mp->status_maklon == 0 | $mp->status_maklon == null)
                                            @endif
                                            @endforeach --}}
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/penawaran') ? 'green' : '' }}">2</span>
                                                    <span class="step_descr">Data Penawaran<br />
                                                        <small>Step 2 description</small>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/legalitas ">
                                                    {{-- @foreach ($maklon_project->take(1) as $mp)


                                            @if ($mp->status_maklon == 1)
                                                <span class="step_no" style="background: yellow;">3</span>
                                            @elseif($mp->status_maklon == 2)
                                                <span class="step_no" style="background: green;">3</span>
                                            @elseif($mp->status_maklon == 0 | $mp->status_maklon == null)
                                            @endif
                                            @endforeach --}}
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/legalitas') ? 'green' : '' }}">3</span>
                                                    <span class="step_descr">Dokumen Legalitas<br />
                                                        <small>Step 3 description</small>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/mou">
                                                    {{-- @foreach ($maklon_project->take(1) as $mp)


                                            @if ($mp->status_maklon == 1)
                                                <span class="step_no" style="background: yellow;">4</span>
                                            @elseif($mp->status_maklon == 2)
                                                <span class="step_no" style="background: green;">4</span>
                                            @elseif($mp->status_maklon == 0 | $mp->status_maklon == null)
 --}}
                                                    {{-- @endif
 @endforeach --}}
                                                    {{-- <span class="step_descr">Kontrak Kerjasama<br />
                                                --}}
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/mou') ? 'green' : '' }}">4</span>
                                                    <span class="step_descr">MOU<br />
                                                        <small>Step 4 description</small>
                                                    </span>
                                                </a>

                                            </li>

                                            <li>
                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/approval">
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/approval') ? 'green' : '' }}">5</span>
                                                    <span class="step_descr">approval project<br />
                                                        <small>Step 5 description</small>
                                                    </span>
                                                </a>
                                            </li>




                                            <li>

                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/trial">
                                                    {{-- @foreach ($maklon_project->take(1) as $mp)
                                        @if ($mp->status_rd == 1)
                                        <span class="step_no" style="background: yellow;">5</span>
                                    @elseif($mp->status_rd == 2)
                                        <span class="step_no" style="background: green;">5</span>
                                    @elseif($mp->status_rd == null | $mp->status_rd == null)
                                    @endif
                                    @endforeach --}}
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/trial') ? 'green' : '' }}">6</span>
                                                    <span class="step_descr">Trial<br />
                                                        <small>Step 6 description</small>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/pendukung">
                                                    {{--
                                                @foreach ($maklon_project->take(1) as $mp)

                                            @if ($mp->status_qa == 1)
                                                <span class="step_no" style="background: yellow;">6</span>
                                            @elseif($mp->status_qa == 2)
                                                <span class="step_no" style="background: green;">6</span>
                                            @elseif($mp->status_qa == null | $mp->status_qa == null)
                                            @endif
                                            @endforeach --}}
                                                    <span class="step_no" style="background: {{ Request::is('project/*/*/pendukung') ? 'green' : '' }}">7</span>
                                            <span class=" step_descr">Audit Food Safety<br />
                                                        <small>Step 7 description</small>
                                                    </span>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="/project/{{$project}}/{{$maklon_sementara}}/kontrak">
                                                    <span class="step_no"style="background: {{ Request::is('project/*/*/kontrak') ? 'green' : '' }}">8</span>
                                                    <span class="step_descr">Kontrak Kerjasama<br />
                                                        <small>Step 8 description</small>
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>


                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- End Content --}}

                    <div class="clearfix"></div>



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
                            var header = document.getElementById("myDIV");
                            var btns = header.getElementsByClassName("btn");
                            for (var i = 0; i < btns.length; i++) {
                                btns[i].addEventListener("click", function () {
                                    var current = document.getElementsByClassName("active");
                                    current[0].className = current[0].className.replace(" active", "");
                                    this.className += " active";
                                });
                            }

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
                    <script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}">
                    </script>
                    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
                    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
                    <script src="{{ asset('js/datatables.min.js') }}"></script>

</body>

</html>
