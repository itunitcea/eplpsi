<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class AtmosphericEmission extends Model{
    
    protected $table = 'atmospheric_emission';
    protected $primaryKey = 'ai_id';
    public $timestamps = false; // timestamp who are the save person date time
}
