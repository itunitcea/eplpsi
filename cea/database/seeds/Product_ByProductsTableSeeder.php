<?php

use Crockett\CsvSeeder\CsvSeeder;

class Product_ByProductsTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/product_byproducts.csv');
        $this->table = 'products_byproducts';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}