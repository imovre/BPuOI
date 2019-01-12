<?php

use Illuminate\Database\Seeder;

class DiagonalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Diagonal::create([
            'diagonal' => 22
        ]);
    }
}
