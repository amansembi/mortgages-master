<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('fullname')->nullable();
			$table->string('slug')->nullable();
			$table->string('email')->nullable();
			$table->string('companyName')->nullable();
            $table->string('companyWebsite')->nullable();
            $table->string('heading')->nullable();
            $table->text('testimonial')->nullable();
            $table->string('image')->nullable();           
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
        Schema::dropIfExists('testimonials');
    }
}
