<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            [
                'name' => 'Nintendo'
            ],
            [
                'name' => 'Playstation'
            ],
            [
                'name' => 'XBOX'
            ],
            [
                'name' => 'PC'
            ],
        ]);
    }
}
