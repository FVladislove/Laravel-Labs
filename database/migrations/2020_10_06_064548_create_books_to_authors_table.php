<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksToAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_to_authors', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->timestamps();
            $table->bigInteger("bookId")->unsigned();
            $table->bigInteger("authorId")->unsigned();

            $table->foreign("bookId")->references("id")->on("books");
            $table->foreign("authorId")->references("id")->on("authors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_to_authors');
    }
}
