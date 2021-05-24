<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coolants', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('color');
            $table->decimal('volume', $precision = 4, $scale = 3);
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
        Schema::dropIfExists('coolants');
    }
}
