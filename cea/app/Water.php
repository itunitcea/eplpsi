<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Water extends Model{
    
   protected $table = 'water';
   protected $primaryKey = 'w_id';
    public $timestamps = false; // timestamp who are the save person date time
}
