<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class food_safety extends Model
{
    use Notifiable;
    protected $table = 'food_safety';
    protected $fillable = ['project_id','maklon_id','id_temuan', 'kategori', 'file','status','note'];
}
