<?php

use Illuminate\Database\Seeder;
use \App\Role;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(array('name'=> 'Branch Manager'));
        Role::create(array('name'=> 'DAF'));
        Role::create(array('name'=> 'Accountant'));
        Role::create(array('name'=> 'Data Manager'));
        Role::create(array('name'=> 'Scheme Manager'));
        Role::create(array('name'=> 'Human Ressource'));
    }
}
