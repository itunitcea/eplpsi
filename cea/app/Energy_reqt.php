<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Energy_reqt extends Model{
    
    protected $table = 'energy_reqt';
    protected $primaryKey = 'er_id';
    public $timestamps = false; // timestamp who are the save person date time
}
