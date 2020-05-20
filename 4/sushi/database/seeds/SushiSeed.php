<?php

use App\Sushi;
use Illuminate\Database\Seeder;

class SushiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sushi::class, 20)->create();
    }
}
