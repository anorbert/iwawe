<?php

use Illuminate\Database\Seeder;
use \App\Line;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Line::create(array('blancheId'=>1, 'name'=>"Test Line", "code"=>"00"));
    }
}
