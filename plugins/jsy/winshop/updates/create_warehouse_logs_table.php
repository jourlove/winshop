<?php namespace Jsy\WinShop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateWarehouseLogsTable extends Migration
{
    public function up()
    {
        Schema::create('jsy_winshop_warehouse_logs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jsy_winshop_warehouse_logs');
    }
}
