<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class penawaran extends Model
{
    use Notifiable;
    protected $table = 'penawaran';
    protected $fillable = ['maklon_id','project_id', 'penawaran','penawaran_upload'];
}
