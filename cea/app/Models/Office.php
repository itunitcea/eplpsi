<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'office';
    protected $primaryKey = 'officeID';

    public function officeInfo($fields = '*'){
        return $this->select($fields)->get();
    }
}
