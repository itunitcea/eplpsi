<?php

use Crockett\CsvSeeder\CsvSeeder;

class UserType extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/usertype.csv');
        $this->table = 'usertype';
        $this->hashable = 'password';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}