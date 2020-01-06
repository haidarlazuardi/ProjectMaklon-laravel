<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodSafetyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_safety', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('maklon_id');
            $table->string('file');
            $table->string('kategori');
            $table->string('status');
            $table->string('note')->nullable();
            $table->timestamp('food_approve')->nullable();

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
        Schema::dropIfExists('food_safety');
    }
}
