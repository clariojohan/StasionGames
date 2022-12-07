<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameDescription = [
            "Worlds are colliding in Sonic the Hedgehog's newest high-speed adventure! In search of the missing Chaos emeralds, Sonic becomes stranded on an ancient island teeming with unusual creatures. Battle hordes of powerful enemies as you explore a breathtaking world of action, adventure, and mystery. Accelerate to new heights and experience the thrill of high-velocity, open-zone platforming freedom as you race across the five massive Starfall Islands. Jump into adventure, wield the power of the Ancients, and fight to stop these new mysterious foes.",

            "This remake brings jaw-dropping visual fidelity, suspenseful atmospheric audio, and improvements to gameplay while staying faithful to the original games thrilling vision. Isaac Clarke is an everyman engineer on a mission to repair a vast mining ship, the USG Ishimura, only to discover something has gone horribly wrong. The ship's crew has been slaughtered and Isaac's beloved partner, Nicole, is lost somewhere on board. Now alone and armed with only his engineering tools and skills, Isaac races to find Nicole as the nightmarish mystery of what happened aboard the Ishimura unravels around him. Trapped with hostile creatures called Necromorphs, Isaac faces a battle for survival, not only against the escalating terrors of the ship but his own crumbling sanity.",

            "As the sun sets on the last day of summer camp, the teenage counselors of Hackett's Quarry throw a party to celebrate. No kids. No adults. No rules. Things quickly take a turn for the worse. Hunted by blood-drenched locals and something far more sinister, the teens' party plans unravel into an unpredictable night of horror. Friendly banter and flirtations give way to life-or-death decisions, as relationships build or break under the strain of unimaginable choices. Play as each of the nine camp counselors in a thrilling cinematic tale, where every decision shapes your unique story from a tangled web of possibilities. Any character can be the star of the show - or die before daylight comes. How will your story unfold?",

            "Battlefield 2042 is a first-person shooter that marks the return to the iconic all-out warfare of the franchise. In a near-future world transformed by disorder, adapt and overcome dynamically changing battlegrounds with the help of your squad and a cutting-edge arsenal. With support for 128 players, Battlefield 2042 brings unprecedented scale on vast environments across the globe. Players will take on several massive experiences, from updated multiplayer modes like Conquest and Breakthrough to the all-new Hazard Zone."
        ];

        $publishersIDs = DB::table('publishers')->pluck('id');

        DB::table('games')->insert([
            [
                'title' => 'Sonic Frontiers',
                'release_date' => '2022-11-08',
                'description' => $gameDescription[0],
                'rating' => 'E',
                'price' => '55.04',
                'publisher_id' => $publishersIDs->random()
            ],
            [
                'title' => 'Dead Space',
                'release_date' => '2022-01-27',
                'description' => $gameDescription[1],
                'rating' => 'E10',
                'price' => '69.99',
                'publisher_id' => $publishersIDs->random()
            ],
            [
                'title' => 'The Quarry',
                'release_date' => '2022-06-10',
                'description' => $gameDescription[2],
                'rating' => 'M',
                'price' => '29.99',
                'publisher_id' => $publishersIDs->random()
            ],
            [
                'title' => 'Battlefield 2042',
                'release_date' => '2021-11-19',
                'description' => $gameDescription[3],
                'rating' => 'A',
                'price' => '4.99',
                'publisher_id' => $publishersIDs->random()
            ]
        ]);
    }
}
