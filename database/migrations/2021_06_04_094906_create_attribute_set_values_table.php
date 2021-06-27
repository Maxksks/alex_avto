<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeSetValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_set_values', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->bigInteger('attribute_sets_id')->unsigned();
            $table->foreign('attribute_sets_id')
                ->references('id')
                ->on('attribute_sets')
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
        Schema::dropIfExists('attribute_set_values');
    }
}
