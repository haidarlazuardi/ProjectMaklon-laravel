<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditFhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_fhs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('maklon_id');
            $table->string('ketidaksesuain');
            $table->string('kategori');
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
         Schema::dropIfExists('audit_fhs');
           }
    }
