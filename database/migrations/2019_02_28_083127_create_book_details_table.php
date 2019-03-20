<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_details', function (Blueprint $table) {
            $table->bigIncrements('bookID');
            $table->string('title',200)->nullable();
            $table->string('author',200)->nullable();
            $table->string('publisher',200)->nullable();
            $table->date('publish_date')->nullable();
            $table->text('available_address')->nullable();
            $table->double('price')->nullable();
            $table->unsignedBigInteger('categoryID')->nullable()->index();
            $table->foreign('categoryID')->references('categoryID')->on('categories')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('userID')->nullable()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('book_details');
    }
}
