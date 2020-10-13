<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\str;

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
        return view('/books/createBook');
    }

    public function store(){
        $book = new Book();
        $book->title = \request('bookTitle');
        $book->authorId = 1; //$book->getAuthorByName(\request('authorName'))['id'];
        $book->datePublished = \request('datePublished');
        $book->genreId = 1; //$book->getGenreByName(\request('genreName'))['id'];
        $book->save();

        return redirect('/books');
    }

    public function edit(int $id){
        $book = Book::all()->firstWhere('id', $id);
        return view('books/edit',[
            'book' => $book,
            ]
        );
    }

    public function update($id){
        $book = Book::all()->firstWhere('id', $id);

        $book->title = \request('bookTitle');
        $book->authorId = 2;
        $book->datePublished = \request('datePublished');
        $book->genreId = 2;

        $book->save();
        return redirect('/books');
    }
}
