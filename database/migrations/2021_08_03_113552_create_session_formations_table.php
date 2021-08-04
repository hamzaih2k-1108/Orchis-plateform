<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_formations', function (Blueprint $table) {
            $table->id('id_session');
            $table->string('titre');
            $table->text('description');
            $table->string('image_session');
            $table->unsignedBigInteger('id_formation_session');
            $table->string('courses_path');
            $table->foreign('id_formation_session')->references('id_formation')->on('formations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_formations');
    }
}
