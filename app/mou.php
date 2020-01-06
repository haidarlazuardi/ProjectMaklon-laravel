<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mou extends Model
{

    protected $table = 'mous';
    protected $fillable = ['maklon_id','project_id', 'mou','file_upload'];

}
