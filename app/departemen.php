<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Departemen as Authenticatable;

class Departemen extends Model
{
    protected $table = 'departemen';
    protected $fillable = ['id','id_departemen', 'nama_departemen', 'aktifitas','status'];
}
