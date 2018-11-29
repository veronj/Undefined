<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = new App\User([
            'name' => 'Burseig',
            'x_position' => '2',
            'y_position' => '2',
            'email' => 'fake@email.com',
            'password' => 'password'
            
        ]);
        $user->save();
    }
}
