<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Noise extends Model{
    
    protected $table = 'noise';
    protected $primaryKey = 'noise_id';
    public $timestamps = false; // timestamp who are the save person date time
}
