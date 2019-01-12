<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(WorksitesTableSeeder::class);
        $this->call(ResolutionsTableSeeder::class);
        $this->call(DiagonalsTableSeeder::class);
        $this->call(Printer_TypesTableSeeder::class);
        $this->call(HddsTableSeeder::class);
        $this->call(CpusTableSeeder::class);
        $this->call(ComputersTableSeeder::class);
        $this->call(PrintersTableSeeder::class);
        $this->call(MonitorsTableSeeder::class);
        $this->call(ContinentsTableSeeder::class);
    }
}
