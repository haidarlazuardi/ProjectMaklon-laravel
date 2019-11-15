@extends('layout.master')

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="" class="img-circle" alt="Avatar" style="width:60px;">
										<h3 class="name">{{$profile->name}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
												<li>Nama<span>{{$profile->name}}</span></li>
											<li>Alamat Email<span>{{$profile->email}}</span></li>
											<li>Departemen<span>{{$profile->role}}</span></li>
											<li>Website <span><a href="https://www.nutrifood.co.id">www.nutrifood.co.id</a></span></li>
										</ul>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"  id="simpan">Ubah kata sandi ?</button>
									</div>
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">

												<form method="POST" action="/ganti/password" onsubmit="return cekStok()">
												{{csrf_field()}}
												<input type="hidden" name="id_user" value="{{Auth::user()->id}}" class="form-control">

													<label for="password_lama"> Password </label>
														  <input type="password" id="password_lama" name="password_lama" class="form-control" required>

													<label for="password"> New Password </label>
														  <input type="password" id="password" name="password" class="form-control" required>


													<label for="password_confirm"> Confirm Password </label>
														  <input type="password" id="password_confirm" name="password_confirmation" class="form-control" required>

												</div>
												<div class="modal-footer">
														<button class=" mt-2 btn btn-primary xs">Submit</button>
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
												</div>
											</div>
										</div>
									{{-- <div class="text-center"><a href="/siswa/{{$profile->id}}/edit" class="btn btn-primary">Ubah kata sandi ?</a></div> --}}
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">

								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Aktivitas Terakhir</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<ul class="list-unstyled activity-timeline">
											<li>
												<i class="fa fa-comment activity-icon"></i>
												<p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
											</li>
											<li>
												<i class="fa fa-cloud-upload activity-icon"></i>
												<p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
											</li>
											<li>
												<i class="fa fa-plus activity-icon"></i>
												<p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repository <span class="timestamp">Yesterday</span></p>
											</li>
											<li>
												<i class="fa fa-check activity-icon"></i>
												<p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</span></p>
											</li>
										</ul>
										<div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
									</div>

								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@stop
