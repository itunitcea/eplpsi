<?php

use Crockett\CsvSeeder\CsvSeeder;

class EPL_LicenceTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/epl_licence.csv');
        $this->table = 'epl_licence';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}
