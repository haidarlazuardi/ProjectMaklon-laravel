<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maklonProject extends Model
{
    protected $table = 'maklon_project';
<<<<<<< HEAD
    protected $fillable = ['id','user_id','maklon_id','project_id','cpm','penawaran','konsep_kerjasama','alur_proses','ppt_penjajakan','status_maklon','status_harga','status_dokumen','status_mou','status_trial','status_food','status_approval','status_margin','status_kontrak','penawaran_upload','penawaran_approve','keterangan','project_approve','trial_approve','food_approve'];
=======
    protected $fillable = ['id','user_id','maklon_id','project_id','cpm','penawaran','konsep_kerjasama','alur_proses','ppt_penjajakan','status_maklon','status_harga','status_dokumen','status_mou','status_trial','status_food','status_approval','status_margin','status_kontrak','penawaran_upload','penawaran_approve','keterangan','project_approve','trial_approve'];
>>>>>>> 3910c7ca47bfa2ee809e5dcdeb9f1996e578a1f3

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
