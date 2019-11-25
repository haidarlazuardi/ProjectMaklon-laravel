<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trial_id');
            $table->integer('user_id');
            $table->integer('project_id');
            $table->integer('maklon_id');
            $table->date('tanggal');
            $table->string('kategori');
            $table->string('summary');
            $table->enum('status',['good','not good']);
            $table->timestamp('trial_approve')->nullable();
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
        Schema::dropIfExists('trials');
    }
}
