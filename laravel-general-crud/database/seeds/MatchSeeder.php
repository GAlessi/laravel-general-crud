<?php

use Illuminate\Database\Seeder;
aggiungere: use App\Match;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Match::class, 20)->create();
    }
}
