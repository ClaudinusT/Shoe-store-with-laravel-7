<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transdetail', function (Blueprint $table) {
            $table->id();
            $table->integer('transId')->unsigned();
            $table->foreign('transId')->references('id')->on('transheader')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('shoeId')->unsigned();
            $table->foreign('shoeId')->references('id')->on('shoes')->onUpdate('cascade')->onDelete('cascade'); 
            $table->integer('qty');
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
        Schema::dropIfExists('transdetail');
    }
}
