<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    
    protected $table = 'appcategories';
    public $timestamps = false; // timestamp who are the save person date time
}
