<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GameGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_genres')->insert([
            [
                'game_id' => '1',
                'genre_id' => '1'
            ],
            [
                'game_id' => '1',
                'genre_id' => '2'
            ],
            [
                'game_id' => '1',
                'genre_id' => '3'
            ],
            [
                'game_id' => '2',
                'genre_id' => '2'
            ],
            [
                'game_id' => '2',
                'genre_id' => '3'
            ],
            [
                'game_id' => '2',
                'genre_id' => '4'
            ],
            [
                'game_id' => '3',
                'genre_id' => '3'
            ],
            [
                'game_id' => '3',
                'genre_id' => '2'
            ],
            [
                'game_id' => '3',
                'genre_id' => '1'
            ],
            [
                'game_id' => '4',
                'genre_id' => '1'
            ],
            [
                'game_id' => '4',
                'genre_id' => '2'
            ],
            [
                'game_id' => '4',
                'genre_id' => '3'
            ]
        ]);
    }
}
