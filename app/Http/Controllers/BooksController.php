<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function booksView(){
        $convert = function ($bookFromDB) {
            $book = new Book();
            $book->fill($bookFromDB);
            return $book;
        };
        $books = \App\Models\Book::all()->sortBy("title");

        return view("/books", [
            "books" => $books,
            'pageTitle' => "Books"
        ]);
    }

    public function createBook(){
        return view('/books/create');
    }
}
