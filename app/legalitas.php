<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class legalitas extends Model
{
    protected $table = 'legalitas';
    protected $fillable =['project_id','maklon_id','akta_pendirian','status_akta_pendirian','akta_penyesuaian','status_akta_penyesuaian','akta_susunan_direksi','status_susunan_direksi','akta_wewenang_direksi','status_wewenang_direksi','siup',
                          'status_siup','nib','status_nib','tdp','status_tdp','iui','status_iui','npwp','status_npwp','izin_domisili','status_izin_domisili','izin_lingkungan','status_izin_lingkungan',
                          'akta_pengurus','status_akta_pengurus','ktp','status_ktp','iumk','status_iumk','sppl_amdal_ukl_upl','status_sppl_amdal_ukl_upl','sppk','status_sppk','psb','status_psb','review','legalitas_upload','legalitas_approve'];
}
