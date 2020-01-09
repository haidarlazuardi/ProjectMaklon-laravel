<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class kontrak_kerjasama extends Model
{
    use Notifiable;
    protected $table = 'kontrak_kerjasamas';
    protected $fillable = ['maklon_id','project_id', 'kontrak_kerjasama','file_upload'];
}
