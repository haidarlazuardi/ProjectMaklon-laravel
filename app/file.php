<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $table = 'file';
    protected $fillable = ['maklon_id','project_id', 'file','cpm','penawaran','ppt_penjajakan','jenis_file','file_upload'];
}
