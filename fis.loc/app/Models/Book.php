<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function getBookAuthor($book_id)
    {
        return $this->query()
            ->join('authors',
                'books.author_id',
                '=',
                'authors.aid')
            ->join('publishing_years',
                'books.py_id',
                '=',
                'publishing_years.pyid')
            ->join('publishing_houses',
                'books.ph_id',
                '=',
                'publishing_houses.phid')
            ->select('authors.*')
            ->where('books.bid','=',$book_id)
            ->get();
    }
}
