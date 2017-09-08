<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('posts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->text('body')->nullable();
                $table->string('short_desc');
                $table->string('photo_id');
                $table->integer('categorie_id');
                $table->string('status');
                $table->string('address')->nullable();
                $table->string('transport')->nullable();
                $table->string('whats_included')->nullable();
                $table->float('price')->nullable();
                $table->float('decreased_price')->nullable();
                $table->float('saving')->nullable();

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
        Schema::drop('posts');
    }

}
