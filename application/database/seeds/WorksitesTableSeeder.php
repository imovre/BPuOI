<?php

use Illuminate\Database\Seeder;

class WorksitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Worksite::create([
            'worksite_number' => '20000',
            'worksite_name' => 'Šteficino radno mjesto',
            'room_id' => 1
        ]);
    }
}
