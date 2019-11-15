<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maklonProject extends Model
{
    protected $table = 'maklon_project';
    protected $fillable = ['id','user_id','maklon_id','project_id','cpm','penawaran','konsep_kerjasama','alur_proses','ppt_penjajakan','status_maklon','status_harga','status_dokumen','status_mou','status_trial','status_food','status_approval','status_margin','status_kontrak','keterangan'];

    public function maklon()
    {
        return $this->belongsToMany('App\Maklon');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function mamaklon()
    {
        return $this->belongsTo('App\Maklon', 'maklon_id');
    }

}
