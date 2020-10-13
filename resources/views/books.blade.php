@extends('layout')

@section('page-title')
    {{$pageTitle}}
@endsection

@section('page-content')
    <table class="table-dark mx-auto w-auto mt-2 text-center ">
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
            </tr>
        @endforeach
    </table>
@endsection
