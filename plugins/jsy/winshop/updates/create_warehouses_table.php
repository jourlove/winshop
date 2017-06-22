<?php namespace Jsy\WinShop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateWarehousesTable extends Migration
{
    public function up()
    {
        Schema::create('jsy_winshop_warehouses', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('jan');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jsy_winshop_warehouses');
    }
}
