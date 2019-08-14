<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span><span class="label label-success pull-right">Coming Soon</span></a></li>
						
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