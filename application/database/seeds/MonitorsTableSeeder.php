<?php

use Illuminate\Database\Seeder;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Monitor::create([
            'monitor_number' => '30000',
            'monitor_name' => 'Monitor Acer 22" V226HQ',
            'purchase_date' => '2018-09-20',
            'guarantee_date'=> '2021-09-19',
            'expiry_date'=> NULL,
            'remark' => 'Monitor iz skladišta',
            'diagonal_id'=> 1,
            'resolution_id' => 1,
            'worksite_id' => 1
        ]);
    }
}
