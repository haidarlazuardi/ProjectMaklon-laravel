<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontrakKerjasamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak_kerjasamas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maklon_id');
            $table->integer('project_id');
            $table->string('kontrak_kerjasama');
            $table->timestamp('file_upload')->nullable();
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
        Schema::dropIfExists('kontrak_kerjasamas');
    }
}
