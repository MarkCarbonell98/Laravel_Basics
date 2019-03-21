<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string("title")->unique();
            // $table->string("title")->nullable();
            // $table->string("title")->default();
            // $table->string("title")->unsigned();
            $table->text("body");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *x
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
