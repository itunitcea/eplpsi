<?php

use Crockett\CsvSeeder\CsvSeeder;

class IndustryTableSeeder extends CsvSeeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/industry.csv');
        $this->table = 'industry';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}
