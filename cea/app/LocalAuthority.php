<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalAuthority extends Model
{
    protected $table = 'localauthority';
    protected $primaryKey = 'lid';
    public $timestamps = false;

    public function localauthority($fields = '*'){
        return $this->select($fields)->get();
    }

    public function district()
    {
    	return $this->belongsTo('District','dicode');
    }

    public function province()
    {
    	return $this->belongsTo('Province','prcode');
    }
}
