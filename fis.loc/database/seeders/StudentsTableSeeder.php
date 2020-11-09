<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
            [
                'surname' => 'Филиппов',
                'name' => 'Кирилл',
                'middle_name' => 'Ростиславович'
            ],
            [
                'surname' => 'Шаповалов',
                'name' => 'Андрон',
                'middle_name' => 'Мартьянович'
            ],
            [
                'surname' => 'Полушина',
                'name' => 'Ксения',
                'middle_name' => 'Елисеевна'
            ],
            [
                'surname' => 'Дагин',
                'name' => 'Кузьма',
                'middle_name' => 'Тихонович'
            ],
            [
                'surname' => 'Мяукин',
                'name' => 'Евсей',
                'middle_name' => 'Вадимович'
            ],
            [
                'surname' => 'Рощина',
                'name' => 'Алина',
                'middle_name' => 'Степановна'
            ],
            [
                'surname' => 'Труш',
                'name' => 'Раиса',
                'middle_name' => 'Якубовна'
            ],
            [
                'surname' => 'Рыбяк',
                'name' => 'Лариса',
                'middle_name' => 'Тихоновна'
            ],
            [
                'surname' => 'Андрюшин',
                'name' => 'Максим',
                'middle_name' => 'Филимонович'
            ],
            [
                'surname' => 'Козлова',
                'name' => 'Альбина',
                'middle_name' => 'Андреевна'
            ]
        ];

        DB::table('students')->insert($student);
    }
}
