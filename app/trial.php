<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trial extends Model
{
    protected $table = 'trials';
    protected $fillable =['trial_id','user_id','project_id','maklon_id','tanggal','kategori','summary','status','trial_approve'];
}
