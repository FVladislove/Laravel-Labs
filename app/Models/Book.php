<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private string $title;
    private int $authorId;
    private string $datePublished;
    private int $genreId;

    public function getAuthorById(int $authorId){
        return Author::all()->firstWhere('id', $authorId);
    }

    public function getGenreById(int $genreId){
        return Genre::all()->firstWhere('id', $genreId);
    }
    use HasFactory;
}
