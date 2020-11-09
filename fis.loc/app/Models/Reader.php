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
        $books = $this->query()
            ->selectRaw('readers.book_id, count(readers.book_id) as count')
            //Условие популярный автор за год
//            ->whereYear('readers.created_at', 'like', '2019-%')
//            ->whereYear('readers.created_at', 'like', '2020-%')
            ->groupBy('readers.book_id')
            ->get();
dd($books);
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
