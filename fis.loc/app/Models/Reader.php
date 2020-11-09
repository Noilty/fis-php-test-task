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

    /**
     * Напишите SQL-запрос,
     * который бы возвращал самого популярного автора за год
     */
    public function popularAuthor()
    {
        $from = date('2019-01-01');
        $to = date('2020-12-31');
        $books = $this->query()
            ->selectRaw('readers.book_id,
            count(readers.book_id) as count')
            ->whereBetween('created_at', [$from, $to])
            ->groupBy('readers.book_id')
            ->get();

        // TODO >>>
        $max_count = 0;
        $book_id = '';
        foreach ($books->toArray() as $item) {
            if ($max_count < $item['count']) {
                $max_count = $item['count'];
                $book_id = $item['book_id'];
            }
        }
        // TODO <<<

        return (new Book())->getBookAuthor($book_id);
    }

    /**
     * Определите понятие «злостный читатель».
     * Предложите алгоритм для поиска самого злостного читателя библиотеки.
     *
     * «злостный читатель» будет определятся по кол-ву книг которое он вернул в библиотеку
     */
    public function goldReader()
    {
        $gold_reader = $this->query()
            ->selectRaw('readers.student_id, count(readers.return_status) as count')
            ->where('return_status','=','1')
            ->groupBy('readers.student_id')
            ->get();

        // TODO >>>
        $max_count = 0;
        $student_id = '';
        foreach ($gold_reader->toArray() as $item) {
            if ($max_count < $item['count']) {
                $max_count = $item['count'];
                $student_id = $item['student_id'];
            }
        }
        // TODO <<<

        return (new Student())->getStudent($student_id);
    }
}
