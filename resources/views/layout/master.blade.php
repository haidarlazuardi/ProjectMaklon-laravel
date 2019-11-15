<!doctype html>
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

	<link href="{{asset('admin/assets/build/css/custom.min.css')}}" rel="stylesheet">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/demo_style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/styles/smart_wizard_vertical.css')}}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">

    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
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
  {{-- <link href="{{asset('admin/assets/build/css/custom.min.css')}}" rel="stylesheet"> --}}


</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layout.include._navbar')
		<!-- END NAVBAR -->
        <!-- LEFT SIEBAR -->
        <br><br><br><br>
      @include('layout.include._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.nutrifood.co.id" target="_blank">Nutrifood</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>



    <script>
            $(document).ready( function () {
              $('#datatable').DataTable();
            });
        </script>




</body>

</html>
