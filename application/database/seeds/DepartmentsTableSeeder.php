<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Department::create([
            'code' => '20000',
            'name' => 'Služba za unutarnje bolesti'
        ]);
    }
}
