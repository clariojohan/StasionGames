<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name' => 'Toge Prodection'
            ],
            [
                'name' => 'Capcom'
            ],
            [
                'name' => 'Blizzard'
            ],
            [
                'name' => 'Mammot'
            ],
            [
                'name' => 'Square Enix'
            ],
            [
                'name' => 'Valve'
            ]
        ]);
    }
}
