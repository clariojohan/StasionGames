<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GameImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_images')->insert([
            [
                'game_id' => '1',
                'path' => '/images/game-images/default-ps4.png'
            ],
            [
                'game_id' => '1',
                'path' => '/images/game-images/default-ps5.png'
            ],
            [
                'game_id' => '1',
                'path' => '/images/game-images/default-xbox.png'
            ],
            [
                'game_id' => '2',
                'path' => '/images/game-images/default-ps4.png'
            ],
            [
                'game_id' => '2',
                'path' => '/images/game-images/default-xbox.png'
            ],
            [
                'game_id' => '3',
                'path' => '/images/game-images/default-ps4.png'
            ],
            [
                'game_id' => '3',
                'path' => '/images/game-images/default-ps5.png'
            ],
            [
                'game_id' => '4',
                'path' => '/images/game-images/default-ps4.png'
            ],
            [
                'game_id' => '4',
                'path' => '/images/game-images/default-ps5.png'
            ],
            [
                'game_id' => '4',
                'path' => '/images/game-images/default-xbox.png'
            ]
        ]);
    }
}
