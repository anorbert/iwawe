<?php

use Illuminate\Database\Seeder;
use \App\Organisation;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Organisation::create(['name'=>'Abihayimana']);
        Organisation::create(['name'=>'Ubucuruzi']);
        Organisation::create(['name'=>'Nderabuzima']);
        Organisation::create(['name'=>'Ibitaro']);
        Organisation::create(['name'=>'Amashuri']);
        Organisation::create(['name'=>'NGOs']);
    }
}
