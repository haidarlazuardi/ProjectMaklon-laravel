<style>
/* Style the buttons */
.btnz {
  border: none;
  outline: none;
  padding: 18px 30px;
  background-color:  #AEB7C2;;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #AEB7C2;
  color:#AEB7C2 ;
}
</style>

<div id="myDIV" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav" id="myDIV">
						<li><a href="/dashboard" class="{{ Request::is('dashboard*') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

						@if(in_array(auth()->user()->role,['Admin','PV','RND','Legal','GP','NR','PRO','QA']))
						<li>
                                <a href="#subpagesb" data-toggle="collapse" class="{{ Request::is('project*') ? 'active' : '' }}"><i class="lnr lnr-rocket"></i> <span>Data PKP</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                <div id="subpagesb" class="collapse ">

                                        <ul class="nav">
                                                <li><a href="/project" class="collapsed">On Progress </a></li>
                                        </ul>
                                            <ul class="nav">
                                                <li><a href="/hold" class="collapsed">Freeze</a></li>
                                            </ul>

                                            <ul class="nav">
                                                <li><a href="/done" class="collapsed">Done</a></li>
                                            </ul>
                                            <ul class="nav">
                                                <li><a href="/rejected" class="collapsed">Reject</a></li>
                                            </ul>
                                            <ul class="nav">
                                                    <li><a href="/inactive" class="collapsed">Drop</a></li>
                                                </ul>
                                                <ul class="nav">
                                                    <li><a href="/approve" class="collapsed">Approve</a></li>
                                                </ul>

                    </div>
                </li>

						@endif

						{{-- @if(in_array(auth()->user()->role,['Admin','PV']))
						<li><a href="/project" class=""><i class="lnr lnr-rocket"></i> <span>Biaya Transportasi</span></a></li>
						@endif

						@if(in_array(auth()->user()->role,['Admin','PV']))
						<li><a href="/project" class=""><i class="lnr lnr-rocket"></i> <span>Harga</span></a></li>
						@endif --}}


						@if(in_array(auth()->user()->role,['Admin','PV','RND','Legal','GP','NR','PRO','QA']))
						<li>

                            <a href="#subpagesd" data-toggle="collapse" class="{{ Request::is('maklon*') ? 'active' : '' }}"><i class="lnr lnr-cart"></i> <span>Data Maklon</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subpagesd" class="collapse ">

                                <ul class="nav">
                                                <li><a href="/maklon" class="collapsed">Maklon</a></li>
                                        </ul>
                                        <ul class="nav">
                                            <li><a href="/maklon/trash " class="collapsed">Trash Maklon </a></li>
                                        </ul>
                                </div>

                            </li>
                                @endif



                @if(in_array(auth()->user()->role,['Admin','PRO']))
                <li>
                    <a href="/user" class="{{ Request::is('user*') ? 'active' : '' }}"><i class="lnr lnr-user"></i> <span>User</span></a>
                </li>
                @endif


		</nav>
	</div>
</div>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>



