<?php namespace Jsy\WinShop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOrderProductTable extends Migration
{
    public function up()
    {
        Schema::create('jsy_winshop_order_product', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jsy_winshop_order_product');
    }
}
