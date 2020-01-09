<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class mou extends Model
{
    use Notifiable;
    protected $table = 'mous';
    protected $fillable = ['maklon_id','project_id', 'mou','file_upload'];

}
