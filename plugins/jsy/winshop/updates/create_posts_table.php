<?php namespace Jsy\WinShop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('jsy_winshop_posts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code');
            $table->integer('status');
            $table->float('total_weight');
            $table->float('total_price');
            $table->json('products');             
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jsy_winshop_posts');
    }
}
