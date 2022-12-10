<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GamePlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_platforms')->insert([
            [
                'game_id' => '1',
                'platform_id' => '1'
            ],
            [
                'game_id' => '1',
                'platform_id' => '2'
            ],
            [
                'game_id' => '1',
                'platform_id' => '3'
            ],
            [
                'game_id' => '2',
                'platform_id' => '2'
            ],
            [
                'game_id' => '2',
                'platform_id' => '3'
            ],
            [
                'game_id' => '2',
                'platform_id' => '4'
            ],
            [
                'game_id' => '3',
                'platform_id' => '3'
            ],
            [
                'game_id' => '3',
                'platform_id' => '2'
            ],
            [
                'game_id' => '3',
                'platform_id' => '1'
            ],
            [
                'game_id' => '4',
                'platform_id' => '1'
            ],
            [
                'game_id' => '4',
                'platform_id' => '2'
            ],
            [
                'game_id' => '4',
                'platform_id' => '3'
            ]
        ]);
    }
}
