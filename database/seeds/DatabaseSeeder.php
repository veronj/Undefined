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
        //factory(App\Sector::class, 9)->create();
        $this->call(SectorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
