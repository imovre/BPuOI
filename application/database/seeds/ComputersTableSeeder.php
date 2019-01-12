<?php

use Illuminate\Database\Seeder;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Computer::create([
            'computer_number' => '10000',
            'computer_name' => 'Računalo INSTAR Starter J9000 Plus',
            'odd' => 0,
            'purchase_date' => '2018-09-20',
            'guarantee_date'=> '2021-09-19',
            'expiry_date'=> NULL,
            'remark' => 'Serija 1',
            'cpu_id'=> 1,
            'hdd_id'=> 1,
            'worksite_id' => 1
        ]);
    }
}
