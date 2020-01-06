<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $table = 'file';
    protected $fillable = ['maklon_id','project_id', 'file','file_upload'];

    public function maklonproject(){

        return $this->belongsTo('App\maklonProject');
}
}
