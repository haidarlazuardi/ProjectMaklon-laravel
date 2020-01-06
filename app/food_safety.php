<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food_safety extends Model
{
    protected $table = 'food_safety';
    protected $fillable = ['project_id','maklon_id','id_temuan', 'kategori', 'file','status','note'];
}
