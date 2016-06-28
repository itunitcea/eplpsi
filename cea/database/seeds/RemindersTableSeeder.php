<?php

use Crockett\CsvSeeder\CsvSeeder;

class RemindersTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/reminders.csv');
        $this->table = 'reminders';
    }

    public function run()
    {
        // runs the seeder - alternatively, you could call $this->runSeeder(); for the same result
        parent::run();
    }
}