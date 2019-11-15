<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaklonProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklon_project', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('maklon_id')->onDelete('cascade');
            $table->integer('project_id')->onDelete('cascade');
            $table->string('cpm');
            $table->string('konsep_kerjasama');
            $table->text('alur_proses');
            $table->string('ppt_penjajakan');
            $table->string('penawaran')->nullable();
            $table->integer('status_maklon')->nullable();
            $table->integer('status_harga')->nullable();
            $table->integer('status_dokumen')->nullable();
            $table->integer('status_mou')->nullable();
            $table->integer('status_trial')->nullable();
            $table->integer('status_food')->nullable();
            $table->integer('status_approval')->nullable();
            $table->integer('status_kontrak')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('maklon_project');
    }
}
