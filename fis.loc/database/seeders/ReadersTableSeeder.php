<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reader = [
            [
                'student_id' => 1,
                'book_id' => 5
            ],
            [
                'student_id' => 10,
                'book_id' => 1
            ],
            [
                'student_id' => 4,
                'book_id' => 2
            ],
            [
                'student_id' => 2,
                'book_id' => 4
            ],
            [
                'student_id' => 4,
                'book_id' => 4
            ],
            [
                'student_id' => 6,
                'book_id' => 5
            ],
            [
                'student_id' => 2,
                'book_id' => 3
            ],
            [
                'student_id' => 2,
                'book_id' => 1
            ],
            [
                'student_id' => 2,
                'book_id' => 5
            ],
            [
                'student_id' => 3,
                'book_id' => 3
            ],
            [
                'student_id' => 3,
                'book_id' => 4
            ],
            [
                'student_id' => 3,
                'book_id' => 1
            ],
            [
                'student_id' => 7,
                'book_id' => 5
            ],
            [
                'student_id' => 7,
                'book_id' => 3
            ],
            [
                'student_id' => 2,
                'book_id' => 1
            ],
            [
                'student_id' => 8,
                'book_id' => 3
            ],
            [
                'student_id' => 8,
                'book_id' => 5
            ],
            [
                'student_id' => 8,
                'book_id' => 1
            ]
        ];

        DB::table('readers')->insert($reader);
    }
}
