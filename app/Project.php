<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'project';
    protected $fillable = ['nama_project','id_project','revisi','idea','gender','uniqueness','dari_umur','sampai_umur','reason','estimated','launch','years','tgl_launch','competitive','competitor','aisle','product_form','bpom','olahan','akg','secondary','tertiary','prefered_flavour','product_benefit','mandatory_ingredient','price','status_data','pkp_number','id_project','ket_no','jenis','created_date','last_update','author','perevisi','tujuan_kirim','tujuan_kirim2','user_penerima','user_penerima2','status_freeze','jangka','waktu','freeze_diaktifkan','note_freeze','category','sales_forecast','selling_price','brand','gramasi','UOM','configuration', 'umur_simpan', 'gambaran_proses', 'priority_project','timeline','status_project'];

    public function maklon()
    {
        return $this->hasManyThrough('App\Maklon', 'App\maklonProject');
    }
}
