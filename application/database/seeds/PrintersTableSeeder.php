<?php

use Illuminate\Database\Seeder;

class PrintersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Printer::create([
            'printer_number' => '20000',
            'printer_name' => 'Printer HP LaserJet Pro M102w',
            'purchase_date' => '2018-09-20',
            'guarantee_date'=> '2021-09-19',
            'expiry_date'=> NULL,
            'remark' => 'Neki printer za Šteficu',
            'printer_type_id'=> 1,
            'worksite_id' => 1
        ]);
    }
}
