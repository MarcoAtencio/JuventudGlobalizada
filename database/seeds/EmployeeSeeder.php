<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('employees')->insert([
            'dni' => '12345678',
            'name' => 'employee1',
            'lastName' => 'employee1',
            'cellPhone' => '123456789',
            'email' => 'employee1@example.com'
        ]);

        factory(\App\Employee::class,40)->create();
    }
}
