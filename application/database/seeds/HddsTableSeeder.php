<?php

use Illuminate\Database\Seeder;

class HddsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Hdd::create([
            'type' => 'SATA II',
            'size' => 500
        ]);
    }
}
