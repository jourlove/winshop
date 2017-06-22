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
            $table->string('jan')->unique();
            $table->string('name');
            $table->string('name_cn')->nullable();
            $table->string('description');
            $table->string('description_cn')->nullable();
            $table->decimal('price', 5, 2);
            $table->decimal('price_cn', 5, 2);
            $table->decimal('weight', 5, 2);
            $table->string('image_url')->nullable();
            $table->json('options')->nullable();
            $table->string('source')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jsy_winshop_products');
    }
}
