<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_name');
            $table->string('pro_slug');
            $table->double('pro_price');
            $table->double('pro_price_sale');
            $table->string('pro_name_cate');
            $table->string('pro_avatar');
            $table->double('pro_total');
            $table->string('pro_desc');
            $table->string('pro_detail');
            $table->string('pro_size');
            $table->string('pro_tag');
            $table->string('pro_color');
            $table->string('pro_album');
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
        Schema::dropIfExists('product');
    }
}
