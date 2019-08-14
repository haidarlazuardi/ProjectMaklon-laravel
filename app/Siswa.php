<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_belakang','nama_depan','jenis_kelamin','agama','alamat','avatar','user_id'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/user.jpg');
        }

        return asset('images/'.$this->avatar);
    }
}


