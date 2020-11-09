<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'student_id',
        'book_id',
        'return_status',
        'updated_at'
    ];

    public function popularAuthor()
    {
        return $this->query()
            ->join('books',
                'readers.book_id',
                '=',
                'books.bid');
    }

    public function goldReader()
    {
        //
    }
}
