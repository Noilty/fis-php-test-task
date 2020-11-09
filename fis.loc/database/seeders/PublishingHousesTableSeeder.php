<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishingHousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ph = [
            [
                'name' => 'Кошкин хвост'
            ],
            [
                'name' => 'Читатель 21'
            ],
            [
                'name' => 'МегаГЕНЕРАТОР'
            ],
            [
                'name' => 'Яндекс BOOK'
            ]
        ];

        DB::table('publishing_houses')->insert($ph);
    }
}
