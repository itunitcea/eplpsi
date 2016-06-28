<?php

use Crockett\CsvSeeder\CsvSeeder;

class EPLCategoryTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/epl_category.csv');
        $this->table = 'epl_category';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}