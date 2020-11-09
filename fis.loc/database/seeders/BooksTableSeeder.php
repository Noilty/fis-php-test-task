<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
                'name' => 'Я делаю это что бы жить Том 1',
                'author_id' => 2,
                'count' => 23,
                'py_id' => 2,
                'ph_id' => 1
            ],
            [
                'name' => 'Я делаю это что бы жить Том 2',
                'author_id' => 1,
                'count' => 21,
                'py_id' => 1,
                'ph_id' => 3
            ],
            [
                'name' => 'В поисках утраченного завтра',
                'author_id' => 5,
                'count' => 5,
                'py_id' => 4,
                'ph_id' => 3
            ],
            [
                'name' => 'Миграции',
                'author_id' => 5,
                'count' => 15,
                'py_id' => 3,
                'ph_id' => 2
            ],
            [
                'name' => 'CSRF-защита',
                'author_id' => 2,
                'count' => 2,
                'py_id' => 1,
                'ph_id' => 3
            ]
        ];

        DB::table('books')->insert($book);
    }
}
