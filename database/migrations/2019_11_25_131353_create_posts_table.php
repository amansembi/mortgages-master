<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title')->nullable();
			$table->string('subtitle')->nullable();
			$table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('postimage')->nullable();
            $table->string('checkPublish')->nullable();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
