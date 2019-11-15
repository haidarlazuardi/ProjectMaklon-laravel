<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaklonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Maklon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_maklon');
            $table->string('nama_pic');
            $table->string('status');
            $table->text('alamat');
            $table->string('kontak');
            $table->string('email');
            $table->text('fasilitas_produksi');
            $table->string('kategori');
            $table->string('skala_kategori');
            $table->string('berbadan_hukum');
            $table->string('website');
            $table->string('product_exist');
            $table->string('keterangan');

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
        Schema::dropIfExists('Maklon');
    }
}
