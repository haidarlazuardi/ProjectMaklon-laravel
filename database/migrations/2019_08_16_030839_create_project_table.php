<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id')->onDelete('cascade');
            $table->integer('id_pkp')->unique()->nullable();
            $table->integer('revisi')->nullable();
            $table->string('nama_project')->unique()->nullable();
            $table->string('category')->nullable();
            $table->string('sales_forecast')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('brand')->nullable();
            $table->integer('gramasi')->nullable();
            $table->string('UOM')->nullable();
            $table->string('configuration')->nullable();
            $table->string('umur_simpan')->nullable();
            $table->string('gambaran_proses')->nullable();
            $table->string('priority_project')->nullable();
            $table->string('timeline')->nullable();
            $table->string('status_project')->nullable();
            $table->string('idea')->nullable();
            $table->string('gender')->nullable();
            $table->integer('dari_umur')->nullable();
            $table->integer('sampai_umur')->nullable();
            $table->string('uniqueness')->nullable();
            $table->string('reason')->nullable();
            $table->string('estimated')->nullable();
            $table->string('launch')->nullable();
            $table->integer('years')->nullable();
            $table->date('tgl_launch')->nullable();
            $table->string('competitive')->nullable();
            $table->string('competitor')->nullable();
            $table->string('aisle')->nullable();
            $table->string('product_form')->nullable();
            $table->integer('bpom')->nullable();
            $table->integer('olahan')->nullable();
            $table->integer('akg')->nullable();
            $table->integer('primary')->nullable();
            $table->string('secondary')->nullable();
            $table->string('tertiary')->nullable();
            $table->string('prefered_flavour')->nullable();
            $table->string('product_benefits')->nullable();
            $table->string('mandatory_ingredient')->nullable();
            $table->integer('price')->nullable();
            $table->string('status_data')->nullable();
            $table->integer('pkp_number')->nullable();
            $table->integer('id_project')->nullable();
            $table->string('ket_no')->nullable();
            $table->string('jenis')->nullable();
            $table->string('created_date')->nullable();
            $table->string('last_update')->nullable();
            $table->string('author')->nullable();
            $table->string('perevisi')->nullable();
            $table->integer('tujuan_kirim')->nullable();
            $table->integer('tujuan_kirim2')->nullable();
            $table->integer('user_penerima')->nullable();
            $table->integer('user_penerima2')->nullable();
            $table->string('status_freeze')->nullable();
            $table->timestamp('jangka')->nullable();
            $table->string('freeze_diaktifkan')->nullable();
            $table->string('note_freeze')->nullable();
            // $table->timestamp('waktu');
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
        Schema::dropIfExists('Project');
    }
}
