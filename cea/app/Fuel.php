<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model{
    
    protected $table = 'fuel';
    protected $primaryKey = 'fid';
    public $timestamps = false; // timestamp who are the save person date time
}
