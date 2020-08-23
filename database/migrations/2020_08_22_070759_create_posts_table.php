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
            $table->id();
            $table->string('post_slug',100)->nullable();
            $table->unsignedBigInteger('post_category_id');
            $table->unsignedBigInteger('post_info_id');
            $table->string('post_title',200);
            $table->text('post_content');
            $table->string('post_images');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes()->nullable();

            $table->foreign('post_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('post_info_id')->references('id')->on('postinfo')->onDelete('cascade');
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
