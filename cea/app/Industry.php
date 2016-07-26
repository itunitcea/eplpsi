<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model{
    
    protected $table = 'industry';
    protected $primaryKey = 'industryID';
    public $timestamps = false; // timestamp who are the save person date time
}
