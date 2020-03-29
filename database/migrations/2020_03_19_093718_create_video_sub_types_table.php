<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoSubTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_sub_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->index('video_type_id');
            $table->string('title');
            $table->unsignedBigInteger('video_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_sub_types');
    }
}
