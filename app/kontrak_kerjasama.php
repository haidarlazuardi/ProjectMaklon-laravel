<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontrak_kerjasama extends Model
{

    protected $table = 'kontrak_kerjasamas';
    protected $fillable = ['maklon_id','project_id', 'kontrak_kerjasama','file_upload'];
}
