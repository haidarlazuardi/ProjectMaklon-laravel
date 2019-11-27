<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maklon extends Model
{
    protected $table = 'Maklon';
    protected $fillable = ['nama_maklon','nama_pic','status','alamat','kontak','email','fasilitas_produksi','kategori','skala_kategori','berbadan_hukum','keterangan','website','product_exist'];

    use SoftDeletes;
    protected $dates =['deleted_at'];


    public function project()
    {
        return $this->belongsToMany('App\Project');
    }

    public function projects()
    {
        return $this->hasManyThrough('App\Project', 'App\maklonProject');
    }

    public function maklonProject(){
        return $this->hasOne('App\Maklon', 'maklon_id');
    }

    public function allMaklonProject(){
        return $this->hasMany('App\maklonProject');
    }

}
