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
        $from = date('2019-01-01');
        $to = date('2020-12-31');
        $books = $this->query()
            ->selectRaw('readers.book_id, count(readers.book_id) as count')
            ->whereBetween('created_at', [$from, $to])
            ->groupBy('readers.book_id')
            ->get();

        $max_count = 0;
        $book_id = '';
        foreach ($books->toArray() as $item) {
            if ($max_count < $item['count']) {
                $max_count = $item['count'];
                $book_id = $item['book_id'];
            }
        }

        return (new Book())->getBookAuthor($book_id);
    }

    public function goldReader()
    {
        //
    }
}
