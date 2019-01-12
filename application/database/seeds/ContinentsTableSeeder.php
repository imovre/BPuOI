<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::create([
            'name' => 'Afrika',
            'number_of_countries' => '0',
            'native_name' => "Crni kontinent"
        ]);
    }
}
