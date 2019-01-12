<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Room::create([
            'room_number' => '200',
            'room_name' => 'Ordinacija br. 1',
            'department_id' => 1
        ]);
    }
}
