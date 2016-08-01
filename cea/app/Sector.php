<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model{
    
    protected $table = 'sector';
    protected $primaryKey = 'scode';
    public $timestamps = false; // timestamp who are the save person date time
}
