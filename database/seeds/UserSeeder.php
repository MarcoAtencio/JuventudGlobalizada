<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'User@example.com',
            'password' => bcrypt('user')

        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('admin')

        ]);

        factory(\App\User::class,40)->create();
    }
}
