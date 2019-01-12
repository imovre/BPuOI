<?php

use Illuminate\Database\Seeder;

class CpusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cpu::create([
            'cpuname' => 'Procesor AMD Ryzen 3 1300X 3.5GHz'
        ]);
    }
}
