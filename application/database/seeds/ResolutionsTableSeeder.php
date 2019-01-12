<?php

use Illuminate\Database\Seeder;

class ResolutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Resolution::create([
            'resolution' => '1600*900'
        ]);
    }
}
