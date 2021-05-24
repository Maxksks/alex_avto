<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetOfToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets_of_tools', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
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
        Schema::dropIfExists('set_of_tools');
    }
}
