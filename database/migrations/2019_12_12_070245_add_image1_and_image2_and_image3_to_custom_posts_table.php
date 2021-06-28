<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImage1AndImage2AndImage3ToCustomPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('custom_posts', function (Blueprint $table) {
            $table->string('image1')->nullable()->after('postimage');
			$table->string('image2')->nullable()->after('image1');
			$table->string('image3')->nullable()->after('image2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custom_posts', function (Blueprint $table) {
            //
        });
    }
}
