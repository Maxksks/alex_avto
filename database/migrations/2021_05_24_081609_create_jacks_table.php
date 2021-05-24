<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jacks', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->integer('carying');
            $table->string('type');
            $table->integer('lifting_height');
            $table->bigInteger('Categories_id')->unsigned();
            $table->foreign('Categories_id')
                ->references('id')
                ->on('Categories')
                ->ondelete('cascade');
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
        Schema::dropIfExists('jacks');
    }
}
