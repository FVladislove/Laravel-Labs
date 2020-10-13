@extends('layout')

@section('app-title', 'Books list')
@section('page-title', 'Add Book')

@section('page-content')
    <form method="post" action="/books/{{$book->id}}" class="w-50 ml-auto mr-auto">
    {{ csrf_field() }}
    {{ method_field("patch") }}
    <!-- TODO add choice from existing authors and genres-->
        <div class="form-group">
            <label for="bookTitle">Book Title</label>
            <input type="text" class="form-control" id="bookTitle" name="bookTitle"
                   placeholder="Input book title" value="{{ $book->title }}">
        </div>
        <div class="form-group">
            <label for="authorName">Author Name (and Surname)</label>
            <input type="text" class="form-control" id="authorName" name="authorName"
                   placeholder="Input author name (and surname)"
                   value="{{ $book->getAuthorById($book->authorId)['name'] }}">
        </div>
        <div class="form-group">
            <label for="datePublished">Date Published</label>
            <input type="date" class="form-control" id="datePublished" name="datePublished"
                   placeholder="Select Date" value="{{ $book->datePublished }}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre"
                   placeholder="Input Genre" value="{{ $book->getGenreById($book->genreId)['name'] }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
