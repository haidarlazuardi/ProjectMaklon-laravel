<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_user = \App\User::where('name','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_user = \App\User::all();
        }

        return view('User.index',['data_user'=>$data_user]);
    }

    public function create(Request $request)
    {
        $user = \App\User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role' => $request['role'],
        ]);
        return redirect('/user')->with('sukses','Data Berhasil di Input');
    }

    public function edit($id)
    {
        $user = \App\User::find($id);
        return view('User/edit',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user->update($request->all());
        return redirect ('/user')->with('sukses','Data Berhasil diupdate');
    }

    public function delete($id)
    {
        $user = \App\User::find($id);
        $user->delete($user);
        return redirect('/user');
    }

    public function profile($id)
    {
        $profile= \App\User::find($id);
        return view('Siswa.profile',compact('profile'));
    }

    public function ganti_password(Request $request)
    {
        $user = DB::table('users')->where('id',$request->id)->get();

        foreach($user as $u)
        {
            if (Hash::check($request->password_lama,$u->password )) {
                $user = DB::table('users')->where('id',$request->id)->update([
                    'password' => bcrypt($request->password),
                ]);
                return redirect()
                ->back()->with('alert','Selamat password Anda berhasil diubah');
            }
            else{
                return redirect()
                ->back()->with('alert','Maaf password gagal diubah, password yang Anda masukkan salah');
            }

        }


    }
}
