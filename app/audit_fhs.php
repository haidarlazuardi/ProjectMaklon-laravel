<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class audit_fhs extends Model
{
    protected $table ='audit_fhs';
    protected $fillable = ['user_id','maklon_id','id_temuan','ketidaksesuain','kategori'];
}
