<?php

use Illuminate\Database\Seeder;
use \App\Blanch;

class BlanchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blanch::create(array('name'=> 'Test Branch'));
    }
}
