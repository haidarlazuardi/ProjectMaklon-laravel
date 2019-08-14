<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maklon extends Model
{
    protected $table = 'maklon';
    protected $fillable = ['nama_maklon','nama_pic','alamat','kontak','email','fasilitas_produksi','skala_kategori','berbadan_hukum','keterangan'];

    public function project()
    {
        return $this->belongsToMany('App\Project');
    }
    
    public function maklonProject(){
        return $this->hasOne('App\MaklonPkp', 'maklon_id');
    }
    // public function allMaklonProject(){
    //     return $this->hasMany('App\MaklonPkp', 'maklon_id');
    // }

}
