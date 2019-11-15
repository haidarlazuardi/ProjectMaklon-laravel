<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = 'project';
    protected $fillable = ['nama_project','category','sales_forecast','selling_price','brand','gramasi','UOM','configuration', 'umur_simpan', 'gambaran_proses', 'priority_project','timeline','status_project'];

    public function maklon()
    {
        return $this->hasManyThrough('App\Maklon', 'App\maklonProject');
    }
}
