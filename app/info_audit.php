<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info_audit extends Model
{
    protected $table ='info_audit';
    protected $fillable =['user_id','maklon_id','no_audit','nama_supplier','nama_bb','tanggal_audit','auditor','auditee','status'];
}
