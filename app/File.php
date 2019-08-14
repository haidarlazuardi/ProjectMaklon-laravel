<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';
    protected $fillable = ['project_id', 'file', 'jenis_file'];
}
