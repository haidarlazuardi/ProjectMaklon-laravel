<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $fillable = ['nama_project','kategori_project','forecast','pricelist','nama_brand','gramasi','konfigurasi_kemas', 'umur_simpan', 'gambaran_proses', 'urgensi_project', 'satuan','timeline'];

    public function maklon()
    {
        return $this->belongsToMany('App\Maklon');
    }

}
