

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>ADS | Daftar Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Custom Theme Style -->
  <link href="{{asset('admin/assets/build/css/custom.min.css')}}" rel="stylesheet">
	</head>

	<body>
		<div class="container">
      {{-- <div class="pos-f-t fixed-top">
        <nav class="navbar navbar-dark bg-primary pt-2 pb-2">
          <h5 class="text-white text-uppercase mt-1 pointer" onclick="document.location.href='dashboard.php'"><i class="fas fa-arrow-left"></i> Ads</h5>
          <button class="navbar-toggler border-light" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
        <div class="collapse float-right mr-2" id="navbarToggleExternalContent">
          <div class="bg-light shadow p-2 rounded">
            <div class="nav flex-column p-1">
              <a href="dashboard.php" class="nav-link text-dark"><i class="fas fa-home"></i> Dashboard</a>
              <a href="daftar-siswa.php" class="nav-link text-dark"><i class="fas fa-user"></i> Daftar Siswa</a>
              <a href="pembayaran-spp.php" class="nav-link text-dark"><i class="fas fa-calculator"></i> Pembayaran SPP</a>
              <a href="administrasi-khusus.php" class="nav-link text-dark"><i class="fas fa-desktop"></i> Administrasi Khusus</a>
              <a href="administrasi-lainnya.php" class="nav-link text-dark"><i class="fas fa-window-restore"></i> Administrasi Lainnya</a>
              <a href="edit-data.php" class="nav-link text-dark"><i class="fas fa-pencil-alt"></i> Edit Data</a>
              <a href="laporan.php" class="nav-link text-dark"><i class="fas fa-file"></i> Laporan</a>
              <div>
                <hr class="bg-white">
              </div>
              <a href="login.php" class="nav-link text-dark"><i class="fas fa-unlock-alt"></i> Logout</a>
            </div>
          </div>
        </div>
      </div> --}}
			<br>
			<br>
			<br>
			<div class="card-body shadow">
        
            <div id="wizard" class="form_wizard wizard_horizontal">
                <ul class="wizard_steps">
                  <li>
                  <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <span class="step_no">1</span>
                    <span class="step_descr">PKP<br/>
                                <small>Step 1 description</small>
                    </span>
                  </a>
                  </li>

                  <li>
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="step_no">2</span>
                            <span class="step_descr">Maklon<br />
                                              <small>Step 1 description</small>
                            </span></a>
                </li>

                <li>
                  <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">
                    <span class="step_no">3</span>
                    <span class="step_descr">Releted<br />
                                      <small>Step 1 description</small>
                    </span>
                  </a>
                </li>

                <li>
                  <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
                    <span class="step_no">4</span>
                    <span class="step_descr">Legalitas<br />
                                      <small>Step 1 description</small>
                    </span>
                  </a>
                </li>
              </ul>
        

        <div class="tab-content">

          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-body">
              <h1 class="card-title">Daftar Siswa</h1>
              <p class="card-text">Daftar seluruh siswa<strong></strong>.</p>
              <div class="card-block">
                
              </div>
              <br>
              {{-- table --}}
            </div>
          </div>
          <div class="tab-pane " id="barbar" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card-body">
              <h1 class="card-title">Daftar Siswa Barbar</h1>
              <p class="card-text">Daftar seluruh siswa<strong> Kelas VII</strong>.</p>
              <div class="card-block">
                
              </div>
              <br>
              {{-- table --}}
            </div>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card-body">
              <h1 class="card-title">Daftar Siswa</h1>
              <p class="card-text">Daftar seluruh siswa<strong> Kelas VII</strong>.</p>
              <div class="card-block">
                
              </div>
              <br>
              {{-- table --}}
            </div>
          </div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="card-body">
              <h1 class="card-title">Daftar Siswa</h1>
              <p class="card-text">Daftar seluruh siswa<strong> Kelas VIII</strong>.</p>
              <div class="card-block">
                
              </div>
              <br>
              {{-- table --}}
            </div>
          </div>
          <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="card-body">
              <h1 class="card-title">Daftar Siswa</h1>
              <p class="card-text">Daftar seluruh siswa<strong> Kelas IX</strong>.</p>
              <div class="card-block">
                
              </div>
              <br>
              {{-- table --}}
            </div>
          </div>
        </div>
			</div>
		</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>