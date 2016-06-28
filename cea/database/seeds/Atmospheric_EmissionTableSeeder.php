<?php

use Crockett\CsvSeeder\CsvSeeder;

class Atmospheric_EmissionTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/atmospheric_emission.csv');
        $this->table = 'atmospheric_emission';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}
