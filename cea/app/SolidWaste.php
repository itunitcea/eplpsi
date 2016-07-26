<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SolidWaste extends Model{
    
    protected $table = 'solidwaste';
     protected $primaryKey = 'sw_id';
    public $timestamps = false; // timestamp who are the save person date time
}
