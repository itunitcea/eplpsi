<?php

use Crockett\CsvSeeder\CsvSeeder;

class Ind_EPLContactInfoTableSeeder extends CsvSeeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/ind_eplcontactinfo.csv');
        $this->table = 'industry_epl_contactinfo';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}
