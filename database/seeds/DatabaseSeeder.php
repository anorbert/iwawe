<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(role_seeder::class);
        $this->call(users_seeder::class);
        $this->call(BlanchSeeder::class);
        $this->call(BlanchUserSeeder::class);
        $this->call(LineSeeder::class);
        $this->call(ClientTypeSeeder::class);
        $this->call(OrganisationSeeder::class);
    }
}
