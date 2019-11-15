<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_audits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('maklon_id');
            $table->integer('id_temuan');
            $table->string('no_audit');
            $table->string('nama_supplier');
            $table->string('nama_bb');
            $table->date('tanggal_audit');
            $table->string('auditor');
            $table->string('auditee');
            $table->string('status');
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
        Schema::dropIfExists('info_audits');
    }
}
