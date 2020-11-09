<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = [
            [
                'surname' => 'Калмыкова',
                'name' => 'Зинаида',
                'middle_name' => 'Артеименовна'
            ],
            [
                'surname' => 'Грядкина',
                'name' => 'Каролина',
                'middle_name' => 'Евсеевна'
            ],
            [
                'surname' => 'Чукчов',
                'name' => 'Иларион',
                'middle_name' => 'Панкратиевич'
            ],
            [
                'surname' => 'Манякин',
                'name' => 'Евграф',
                'middle_name' => 'Арсениевич'
            ],
            [
                'surname' => 'Бальсунова',
                'name' => 'Ариадна',
                'middle_name' => 'Харитоновна'
            ]
        ];

        DB::table('authors')->insert($author);
    }
}
