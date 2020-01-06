<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penawaran extends Model
{
    protected $table = 'penawaran';
    protected $fillable = ['maklon_id','project_id', 'penawaran','penawaran_upload'];
}
