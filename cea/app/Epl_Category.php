<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epl_Category extends Model
{
    protected $table = 'epl_category';
    protected $primaryKey = 'categoryID';
    public $timestamps = false;

    public function epl_category($fields = '*'){
        return $this->select($fields)->get();
    }
}
