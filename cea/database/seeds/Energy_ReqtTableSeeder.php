<?php

use Crockett\CsvSeeder\CsvSeeder;

class Energy_ReqtTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/energy_reqt.csv');
        $this->table = 'energy_reqt';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}
