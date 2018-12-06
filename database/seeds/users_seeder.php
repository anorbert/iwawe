<?php

use Illuminate\Database\Seeder;
use \App\User;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //0787536396
        User::create(array('name'=> 'Branch Manager', 'email'=>'branch@gmail.com', 'password'=>bcrypt('123456'), 'roleId'=>1));
        User::create(array('name'=> 'Daf User', 'email'=>'daf@gmail.com', 'password'=>bcrypt('123456'), 'roleId'=>2));
        User::create(array('name'=> 'Accountant User', 'email'=>'accountant@gmail.com', 'password'=>bcrypt('123456'), 'roleId'=>3));
        User::create(array('name'=> 'Data Manager', 'email'=>'data@gmail.com', 'password'=>bcrypt('123456'), 'roleId'=>4));
        User::create(array('name'=> 'Scheme Manager', 'email'=>'scheme@gmail.com', 'password'=>bcrypt('123456'), 'roleId'=>5));
        User::create(array('name'=> 'Human Ressource', 'email'=>'ressource@gmail.com', 'password'=>bcrypt('123456'), 'roleId'=>6));
    }
}
