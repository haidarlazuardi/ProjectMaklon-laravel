<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maklon_id');
            $table->integer('project_id');
            $table->string('file');
            $table->string('cpm')->nullable();
            $table->string('penawaran')->nullable();
            $table->string('ppt_penjajakan')->nullable();
            $table->string('jenis_file');
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
        Schema::dropIfExists('file');
    }
}
