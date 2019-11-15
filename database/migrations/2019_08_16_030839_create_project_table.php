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
            $table->string('nama_project');
            $table->string('category');
            $table->string('sales_forecast');
            $table->string('selling_price');
            $table->string('brand');
            $table->integer('gramasi');
            $table->string('UOM');
            $table->string('configuration');
            $table->string('umur_simpan');
            $table->text('gambaran_proses');
            $table->string('priority_project');
            $table->string('timeline');
            $table->integer('status_project')->nullable();

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
