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
            $table->string('manu');
            $table->string('img');
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
