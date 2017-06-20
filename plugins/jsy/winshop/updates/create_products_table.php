<?php namespace Jsy\WinShop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('jsy_winshop_products', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('jan');
            $table->string('name');
            $table->string('name_cn');
            $table->string('description');
            $table->string('description_cn');
            $table->string('image_path');
            $table->float('price');
            $table->float('price_cn');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jsy_winshop_products');
    }
}
