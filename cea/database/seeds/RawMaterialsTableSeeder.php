<?php

use Crockett\CsvSeeder\CsvSeeder;

class RawMaterialsTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/raw_materials.csv');
        $this->table = 'rawmaterials';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}