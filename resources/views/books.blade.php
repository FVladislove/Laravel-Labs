@extends('layout')

@section('page-title')
    {{$pageTitle}}
@endsection

@section('page-content')
    <div class="d-flex flex-column table-container w-75 ml-auto mr-auto">
        <a href="/books/createBook" class="btn btn-outline-success">
            Add Book
        </a>
        <table class="table-dark w-100 mt-2 text-center ">
            <thead class="bg-black text-white border-bottom border-success">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Date Published</th>
                <th scope="col">Genre</th>
            </tr>
            </thead>
            <tr>
            </tr>
            @foreach($books as $book)
                <tr class="bg-around-purple border-bottom border-light">
                    <td class="p-1" scope="row">{{$book->title}}</td>
                    <td class="p-1">{{$book->getAuthorById($book['authorId'])['name']}}</td>
                    <td class="p-1">{{$book->datePublished}}</td>
                    <td class="p-1">{{$book->getGenreById($book['genreId'])['name']}}</td>
                    <td class="p-1"><a href="/books/{{$book->id}}/edit"
                        class="btn btn-outline-primary">Edit</a> </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
