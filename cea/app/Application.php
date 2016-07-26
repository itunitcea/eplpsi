<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Application extends Model{
    
    protected $table = 'epl_licence';
    protected $primaryKey = 'applicationID';
    public $timestamps = false; // timestamp who are the save person date time
}
