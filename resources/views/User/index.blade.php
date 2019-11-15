@extends('layout.master')

@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="x_panel">
                <div class="row">
                  <div class="col-md-3">
                  <h2>DATA USER</h2>
                </div>
            </div>
        <div class="panel-body">
                    <div class="panel_toolbox">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped jambo_table bulk_action" >
                <thead>
					<tr>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>AKSI</th>
					</tr>
				</thead>
					<tbody>
                      @foreach($data_user as $user)
                      <tr>
                          <td>{{$user->name}}</a></td>
                          <td>{{$user->email}}</a></td>
                          <td>{{$user->role}}</td>
                          <td>
                              <!-- <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm">Edit</a> -->
                              <a href="/user/{{$user->id}}/edit" class="btn btn-warning btn-sm"><i class="lnr lnr-pencil"></i></a>
                              <a href="/user/{{$user->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau di Hapus')"><i class="lnr lnr-trash"></i></a>
                          </td>
                      </tr>
                      @endforeach
										</tbody>
									</table>
								</div>
							</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/user/create" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Level</label>
            <select name="role" class="form-control" id="exampleFormControlSelect1">
            <option selected disabled>-- Pilih Level --</option>
            <option value="Admin">Admin</option>
            <option value="PV">PV</option>
            <option value="RND">RND</option>
            <option value="Legal">Legal</option>
            <option value="GP">GP</option>
            <option value="NR">NR</option>
            <option value="QA">QA</option>
            <option value="PRO">PRO</option>
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

@stop

