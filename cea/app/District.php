<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';
    protected $primaryKey = 'dicode';
    public $timestamps = false;

    // protected $fillable = ['dicode','prcode','diname'];

    // // public function district($fields = '*'){
    // //     return $this->select($fields)->get();
    // // }

    // public function province()
    // {
    // 	return $this->belongsTo('Province','dicode');
    // }

    // public function localauthority()
    // {
    // 	return $this->hasMany('LocalAuthority','dicode');
    // }
}
