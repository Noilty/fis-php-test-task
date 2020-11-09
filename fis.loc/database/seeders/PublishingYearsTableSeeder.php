<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishingYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $py = [
            [
                'year' => 1991
            ],
            [
                'year' => 1992
            ],
            [
                'year' => 1996
            ],
            [
                'year' => 2005
            ]
        ];

        DB::table('publishing_years')->insert($py);
    }
}
