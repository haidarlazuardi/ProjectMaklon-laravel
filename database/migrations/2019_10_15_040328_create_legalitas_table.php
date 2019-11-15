<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalitas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('maklon_id');
            $table->string('akta_pendirian')->nullable();
            $table->integer('status_akta_pendirian')->nullable();
            $table->string('akta_penyesuaian')->nullable();
            $table->integer('status_akta_penyesuaian')->nullable();
            $table->string('akta_susunan_direksi')->nullable();
            $table->integer('status_susunan_direksi')->nullable();
            $table->string('akta_wewenang_direksi')->nullable();
            $table->integer('status_wewenang_direksi')->nullable();
            $table->string('siup')->nullable();
            $table->integer('status_siup')->nullable();
            $table->string('nib')->nullable();
            $table->integer('status_nib')->nullable();
            $table->string('tdp')->nullable();
            $table->integer('status_tdp')->nullable();
            $table->string('psb')->nullable();
            $table->integer('status_psb')->nullable();
            $table->string('iui')->nullable();
            $table->integer('status_iui')->nullable();
            $table->string('npwp')->nullable();
            $table->integer('status_npwp')->nullable();
            $table->string('izin_domisili')->nullable();
            $table->integer('status_izin_domisili')->nullable();
            $table->string('izin_lingkungan')->nullable();
            $table->integer('status_izin_lingkungan')->nullable();
            $table->string('akta_pengurus')->nullable();
            $table->integer('status_akta_pengurus')->nullable();
            $table->string('ktp')->nullable();
            $table->integer('status_ktp')->nullable();
            $table->string('iumk')->nullable();
            $table->integer('status_iumk')->nullable();
            $table->string('sppl_amdal_ukl_upl')->nullable();
            $table->integer('status_sppl_amdal_ukl_upl')->nullable();
            $table->string('sppk')->nullable();
            $table->integer('status_sppk')->nullable();
            $table->string('review')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legalitas');
    }
}
