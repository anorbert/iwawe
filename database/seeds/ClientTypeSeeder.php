<?php

use Illuminate\Database\Seeder;
use \App\ClientType;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClientType::create(['name'=>"Public"]);
        ClientType::create(['name'=>"House"]);
        ClientType::create(['name'=>"Organisation"]);
    }
}
