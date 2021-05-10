<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Payment_types_id')->unsigned();
            $table->foreign('Payment_types_id')
                ->references('id')
                ->on('Payment_types')
                ->ondelete('cascade');
            $table->bigInteger('Carts_id')->unsigned();
            $table->foreign('Carts_id')
                ->references('id')
                ->on('Carts')
                ->ondelete('cascade');
            $table->bigInteger('Addreses_id')->unsigned();
            $table->foreign('Addreses_id')
                ->references('id')
                ->on('Addresses')
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
        Schema::dropIfExists('Orders');
    }
}
