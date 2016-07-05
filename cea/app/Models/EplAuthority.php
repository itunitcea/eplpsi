<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EplAuthority extends Model
{
    protected $table = 'eplauthority';
    protected $primaryKey = 'eplID';

    public function authority($fields = '*'){
        return $this->select($fields)->get();
    }
}
