<?php

use Illuminate\Database\Seeder;
use \App\BlanchUser;

class BlanchUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BlanchUser::create(array('blancheId'=> 1, 'userId'=>1));
        BlanchUser::create(array('blancheId'=> 1, 'userId'=>5));
    }
}
