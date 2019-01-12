<?php

use Illuminate\Database\Seeder;

class Printer_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PrinterType::create([
            'typename' => 'Laser'
        ]);
    }
}
