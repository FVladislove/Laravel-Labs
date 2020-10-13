<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable("books")){
            return;
        }
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->timestamps();
            $table->string("title", 256);
            $table->bigInteger("authorId")->unsigned();
            $table->date("datePublished");
            $table->integer("genreId")->unsigned();

            $table->foreign("authorId")->references("id")->on("authors");
            $table->foreign("genreId")->references("id")->on("genres");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
