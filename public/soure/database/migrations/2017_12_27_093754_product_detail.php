<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Product_detail', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->string('desc');
            $table->string('item');
            $table->string('type');
            $table->string('price');
            $table->string('manu');
            $table->string('big_img');
            $table->string('small_img');
            $table->string('detail_img_1');
            $table->string('detail_img_2');
            $table->string('detail_img_3');
            $table->string('detail_img_4');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Product_detail');
    }
}
